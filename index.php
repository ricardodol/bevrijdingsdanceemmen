<?php

$pageName = '5 Mei';

include_once './inc/header.php';

?>

<main>
    <section id="intro">
        <div class="container">
            <p class="subtitle">Café de Zwetser presents:</p>
            <h1>Bevrijdings<wbr>dance Emmen</h1>

            <p>Op <?= ucfirst(strftime('%A', strtotime('05-05-' . $eventYear)));?> 5 Mei.</p>

            <div class="aftermovie">
                <iframe title="Bevrijdingsdance Emmen Aftermovie" width="560" height="315" src="https://www.youtube.com/embed/24-TbCRRBng" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </section>
    <section id="countdown" class="invert">
        <div class="container">
            <h2>Aftellen</h2>

            <div class="countdown-clock">

            </div>

            <a href="https://www.facebook.com/events/180333779533079/" class="button white" target="_blank" rel=”noopener”>Zet in je Facebook agenda</a>
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
