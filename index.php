<?php

$pageName = '26 & 27 April';

include_once './inc/header.php';

?>

<main>
    <section id="intro">
        <div class="container">
            <p class="subtitle">Café de Zwetser presents:</p>
            <h1>Konings<wbr>feesten Emmen</h1>

            <p>Bereid je voor op twee dagen lang oranje gekte! Op <?= ucfirst(strftime('%A', strtotime('26-04-' . $eventYear)));?> 26 en <?= ucfirst(strftime('%A', strtotime('27-04-' . $eventYear)));?> 27 April keren de Koningsfeesten namelijk weer terug naar parkeerterrein De Vreding in Emmen. Hét feestje in de regio ter ere van de verjaardag van onze Koning waarbij je kunt rekenen op de beste artiesten van dit moment, top entertainment, lekker eten en natuurlijk veel gezelligheid. Twee dagen achter elkaar kleurt Emmen oranje, en geven wij jou alle ingrediënten voor een onvergetelijke Koningsnacht en Koningsdag!</p>

            <div class="aftermovie">
                <iframe title="Bevrijdingsdance Emmen Aftermovie" width="560" height="315" src="https://www.youtube.com/embed/PoekhfQBAL0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </section>
    <section id="countdown" class="invert">
        <div class="container">
            <h2>Aftellen</h2>

            <div class="countdown-clock">

            </div>

            <a href="https://www.facebook.com/events/456748655072149/" class="button white" target="_blank" rel=”noopener”>Zet in je Facebook agenda</a>
        </div>
    </section>
    <section id="lineup">
        <div class="container">
            <p class="subtitle">Wie komt er allemaal?</p>
            <h2>Line-up</h2>

            <?php include_once "inc/line-up.php"; ?>
        </div>
    </section>
</main>

<?php include_once './inc/footer.php'; ?>
