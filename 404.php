<?php

$pageName = '404 Pagina niet gevonden';

include_once './inc/header.php'

?>

<main>
    <section id="error">
        <div class="container">
            <p class="subtitle">Oeps...</p>
            <h1>De pagina is niet gevonden</h1>

            <p>
                Sorry, de pagina die u zoekt is niet beschikbaar.<br>
                Klik <a href="/">hier</a> om terug naar de homepage van <?= $_SERVER['HTTP_HOST'] ?> te gaan.
            </p>
        </div>
    </section>
</main>

<?php include_once './inc/footer.php'; ?>

