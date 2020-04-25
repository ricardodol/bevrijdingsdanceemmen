<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['recaptcha_response'])) {

    // Build POST request
    $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
    $recaptcha_secret = '6Le6AdoUAAAAAMr4CFj4h3ZhP8FeBs2tmBbYKguA';
    $recaptcha_response = $_POST['recaptcha_response'];

    // Make and decode POST request
    $recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
    $recaptcha = json_decode($recaptcha);

    // Take action based on the score returned
    if ($recaptcha->score >= 0.5) {
        // Verified - send email

        $email_to = "info@bevrijdingsdanceemmen.nl";
        $email_subject = "Bevrijdingsdanceemmen.nl Contact formulier";

        function died($error) {
            // your error code can go here
            echo "We are very sorry, but there were error(s) found with the form you submitted. ";
            echo "These errors appear below.<br /><br />";
            echo $error."<br /><br />";
            echo "Please go back and fix these errors.<br /><br />";
            die();
        }

        // validation expected data exists
        if(!isset($_POST['name']) ||
            !isset($_POST['subject']) ||
            !isset($_POST['email']) ||
            !isset($_POST['message'])) {
            died('We are sorry, but there appears to be a problem with the form you submitted.');
        }

        $name = $_POST['name']; // required
        $subject = $_POST['subject']; // required
        $email_from = $_POST['email']; // required
        $message = $_POST['message']; // required

        $error_message = "";
        $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

        if(!preg_match($email_exp,$email_from)) {
            $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
        }

        $string_exp = "/^[A-Za-z .'-]+$/";

        if(!preg_match($string_exp,$name)) {
            $error_message .= 'The First Name you entered does not appear to be valid.<br />';
        }

        if(strlen($message) < 2) {
            $error_message .= 'The Comments you entered do not appear to be valid.<br />';
        }

        if(strlen($error_message) > 0) {
            died($error_message);
        }

        function clean_string($string) {
            $bad = array("content-type","bcc:","to:","cc:","href");
            return str_replace($bad,"",$string);
        }

        $email_message .= "Naam: ".clean_string($name)."\n";
        $email_message .= "Email: ".clean_string($email_from)."\n";
        $email_message .= "Onderwerp: ".clean_string($subject)."\n";
        $email_message .= "Bericht: ".clean_string($message)."\n";

        // create email headers
        $headers = 'From: Bevrijdingsdance Emmen <info@bevrijdingsdanceemmen.nl>'."\r\n".
            'Reply-To: '.$email_from."\r\n" .
            'X-Mailer: PHP/' . phpversion();
        @mail($email_to, $email_subject, $email_message, $headers);

        $mailChecked = true;
        $mailMsg = 'Het bericht is succesvol verzonden. Wij nemen zo spoedig mogelijk contact met u op!';
    } else {
        // Not verified - show form error

        $mailChecked = true;
        $mailMsg = 'Het bericht is niet verzonden doordat u niet voldoet aan de reCAPTCHA test.';
    }

}
