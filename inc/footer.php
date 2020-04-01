<footer>
    <div class="container-fluid">
        <div class="flex-row top">
            <div class="col-4">
                <a href="/" class="logo">
                    <img src="/assets/img/logo.png" alt="Logo Bevrijdingsdance Emmen">
                </a>
            </div>
            <div class="col-4 nav">
                <h4>Festival</h4>
                <a href="/">Home</a>
                <a href="/tickets/">Tickets</a>
                <a href="/line-up/">Line-up</a>
            </div>
            <div class="col-4 nav">
                <h4>Info</h4>
                <a href="/info/">Info</a>
                <a href="#">Privacy Policy</a>
                <a href="#">Terms & Conditions</a>
                <a href="/huisregels/">Huisregels</a>
                <a href="/contact/">Contact</a>
            </div>
            <div class="col-4 nav">
                <h4>Social Media</h4>
                <a href="https://www.facebook.com/bevrijdingsdanceemmen/" target="_blank" rel=”noopener”>Facebook</a>
                <a href="https://www.instagram.com/bevrijdingsdanceemmen/" target="_blank" rel=”noopener”>Instagram</a>
            </div>
        </div>
        <div class="flex-row copyright">
            <div class="col-3">
                <a href="/">Bevrijdingsdance Emmen</a>
            </div>
            <div class="col-3">
                <a href="https://dezwetser.nl" target="_blank" rel=”noopener”>
                    <img src="/assets/img/zwetser-logo-white.png" alt="Logo Café de Zwetser">
                </a>
                <p>Copyright © <?= date('Y') ?> <a href="/">Bevrijdingsdance Emmen</a>. All rights reserved.</p>
            </div>
            <div class="col-3">
                <p>Created by <a href="https://rd-designs.nl" target="_blank" rel="noopener">RD-Designs</a>.</p>
            </div>
        </div>
    </div>
</footer>
<script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "MusicEvent",
        "name": "Bevrijdingsdance Emmen",
        "description": "Twee dagen lang oranje gekte! Op <?= ucfirst(strftime('%A', strtotime('26-04-' . $eventYear)));?> 26 en <?= ucfirst(strftime('%A', strtotime('27-04-' . $eventYear)));?> 27 April keren de Koningsfeesten namelijk weer terug naar parkeerterrein De Vreding in Emmen.",
        "location": {
            "@type": "MusicVenue",
            "name": "De Vreding",
            "address": "De Vreding, Emmen, Nederland"
        },
        "organizer": {
            "@type": "Organization",
            "name": "Café de Zwetser",
            "url": "https://dezwetser.nl"
        },
        "image": "https://bevrijdingsdanceemmen.nl/assets/img/open_graph.jpg",
        "url" : "https://bevrijdingsdanceemmen.nl",
        "sameAs": [
              "https://www.facebook.com/bevrijdingsdanceemmen",
              "https://www.instagram.com/bevrijdingsdanceemmen/"
              ],
        "startDate": "2020-05-05T17:00",
        "endDate": "2020-05-06T00:00",
        "offers": {
            "@type": "Offer",
            "availability": "https://schema.org/InStock",
            "validFrom": "2024-03-03T20:00",
            "url": "https://bevrijdingsdanceemmen.nl/tickets/",
            "price": "10.00",
            "priceCurrency": "EUR"
        },
        "eventStatus": "EventCancelled",
        "performer": []
    }
</script>

<script src="//ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TimelineMax.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/plugins/ScrollToPlugin.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/animation.gsap.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/moment-timezone/0.5.27/moment-timezone-with-data.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js"></script>

<script src="/assets/js/modernizr.min.js"></script>
<script src="/assets/js/scrollMagic.min.js?v=0.1"></script>
<script src="/assets/js/menu-toggle.min.js?v=0.1"></script>
<script src="/assets/js/spamspan.min.js"></script>
<script src="/assets/js/cookieConsent.min.js?v=0.1"></script>
<script src="/assets/js/flipclock.min.js?v=0.8.0"></script>
<script src="/assets/js/countdownClock.min.js?v=0.1"></script>
<script src="/assets/js/FAQ.min.js?v=0.1"></script>
</body>
</html>
