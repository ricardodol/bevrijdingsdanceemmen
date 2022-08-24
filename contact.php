<?php

$pageName = 'Contact';

include_once './inc/header.php';

?>
<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>
    window.fbAsyncInit = function() {
        FB.init({
            xfbml            : true,
            version          : 'v6.0'
        });
    };

    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/nl_NL/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>

<!-- Your customer chat code -->
<!--<div class="fb-customerchat"-->
<!--     attribution=setup_tool-->
<!--     page_id="184468472179865"-->
<!--     theme_color="#FE7000"-->
<!--     logged_in_greeting="Hey Koning/Koningin! Waar kunnen wij jou mee helpen?"-->
<!--     logged_out_greeting="Hey Koning/Koningin! Waar kunnen wij jou mee helpen?">-->
<!--</div>-->
<main>
    <section id="contact">
        <div class="container">
            <p class="subtitle">Toch nog vragen? Neem contact op met ons!</p>
            <h1>Contact</h1>

            <div class="contactform">
                <p>
                    U kunt contact opnemen met ons via onze socialmedia kanalen of door te mailen naar
                    <span class="spamspan">
                            <span class="u">info</span>
                            [at]
                            <span class="d">bevrijdingsdanceemmen [dot] nl</span>
                        </span>
                </p>

                <p id="contactform_msg"></p>

                <form id="contactform" name="contactform" method="post">
                    <input type="text" id="name" name="name" placeholder="Volledige naam" required>
                    <input type="email" id="email" name="email" placeholder="E-mail" required>
                    <input type="text" id="subject" name="subject" placeholder="Onderwerp" required>
                    <textarea id="message" name="message" placeholder="Bericht" required></textarea>
                    <input class="button orange" type="submit" value="Versturen">
                    <input type="hidden" name="recaptcha_token" id="recaptcha_token">
                </form>

                <p class="recaptcha">
                    This site is protected by reCAPTCHA and the Google <a href="https://policies.google.com/privacy" target="_blank" rel="noopener">Privacy Policy</a> and <a href="https://policies.google.com/terms" target="_blank" rel="noopener">Terms of Service</a> apply.
                </p>
            </div>
        </div>
    </section>
</main>

<?php include_once './inc/footer.php'; ?>

