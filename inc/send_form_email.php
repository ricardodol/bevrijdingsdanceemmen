<?php
use PHPMailer\PHPMailer\PHPMailer;

require '../vendor/autoload.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['recaptcha_token'])) {
    // reCAPTCHA
    $recaptcha_secret = '6Le6AdoUAAAAAMr4CFj4h3ZhP8FeBs2tmBbYKguA';
    $recaptcha_token = $_POST['recaptcha_token'];
    $recaptcha = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $recaptcha_secret . '&response=' . $recaptcha_token);
    $recaptcha = json_decode($recaptcha);

    if ($recaptcha->score >= 0.5 && $recaptcha->success) {
        // reCAPTCHA successful
        // Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);

        function died($error) {
            echo json_encode([
                'error' => true,
                'formMsg' => $error
            ]);
            die();
        }

        // validation expected data exists
        if(!isset($_POST['name']) ||
            !isset($_POST['subject']) ||
            !isset($_POST['email']) ||
            !isset($_POST['message'])) {
            died('Het spijt ons, maar er lijkt een probleem te zijn met het ingevulde formulier.');
        }

        // form fields
        $name = $_POST['name'];
        $subject = $_POST['subject'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        // validation
        $error_message = "";

        $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
        if(!preg_match($email_exp,$email)) {
            $error_message .= 'Het e-mailadres dat u heeft ingevoerd, lijkt niet geldig te zijn.<br />';
        }

        $string_exp = "/^[A-Za-z .'-]+$/";
        if(!preg_match($string_exp,$name)) {
            $error_message .= 'De naam dat u heeft ingevoerd, lijkt niet geldig te zijn.<br />';
        }

        if(!preg_match($string_exp,$subject)) {
            $error_message .= 'Het onderwerp dat u heeft ingevoerd, lijkt niet geldig te zijn.<br />';
        }

        if(strlen($message) < 2) {
            $error_message .= 'Het bericht dat u hebt ingevoerd, lijkt niet geldig te zijn.<br />';
        }

        if(strlen($error_message) > 0) {
            died($error_message);
        }

        function clean_string($string) {
            $bad = array("content-type","bcc:","to:","cc:","href");
            return str_replace($bad,"",$string);
        }

        $email_message = "";
        $email_message .= "Naam: ".clean_string($name)."\n";
        $email_message .= "Email: ".clean_string($email)."\n";
        $email_message .= "Onderwerp: ".clean_string($subject)."\n";
        $email_message .= "Bericht: ".clean_string($message)."\n";

        try {
            $mail->setFrom('info@bevrijdingsdanceemmen.nl', 'Bevrijdingsdance Emmen');
            $mail->addAddress('info@bevrijdingsdanceemmen.nl');
            $mail->addReplyTo($email);

            $mail->isHTML(true);
            $mail->Subject = 'Bevrijdingsdance Emmen - Contact formulier';
            $mail->Body    = str_replace(["\r\n", "\n"], "<br/>", $email_message);
            $mail->AltBody = $email_message;

            $mail->send();

            echo json_encode([
                'error' => false,
                'formMsg' => 'Het bericht is succesvol verzonden. Wij nemen zo spoedig mogelijk contact met u op!'
            ]);
        } catch (Exception $e) {
            echo json_encode([
                'error' => true,
                'formMsg' => 'Oeps! Het bericht kon niet worden verzonden. Probeer het later opnieuw.'
            ]);
        }
    } else {
        // reCAPTCHA score to low
        echo json_encode([
            'error' => true,
            'formMsg' => 'Het bericht is niet verzonden doordat u niet voldoet aan de reCAPTCHA test.'
        ]);
    }
}
