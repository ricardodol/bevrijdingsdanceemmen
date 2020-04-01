<?php
setlocale(LC_ALL, 'nl_NL');
$eventYear = 2020;
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <!-- Created by RD-Designs - www.rd-designs.nl - Copyright Bevrijdingsdanceemmen -->

    <!-- Google Tag Manager -->

    <!-- End Google Tag Manager -->

    <meta charset="UTF-8">
    <meta name="description" content="Twee dagen lang oranje gekte! Op <?= ucfirst(strftime('%A', strtotime('26-04-' . $eventYear)));?> 26 en <?= ucfirst(strftime('%A', strtotime('27-04-' . $eventYear)));?> 27 April keren de Koningsfeesten namelijk weer terug naar parkeerterrein De Vreding in Emmen.">
<!--    <meta name="keywords" content="Café de Zwetser, Zwetser, Emmen, Festival, Koningsdag, Koningsnacht, Koning, King, Kingsnight, Kingsday, Koningsfeesten, Oranje, Orange, Feest">-->
    <meta name="author" content="RD-Designs">
    <link rel="canonical" href="https://bevrijdingsdanceemmen.nl" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= $pageName ?> | Bevrijdingsdance Emmen</title>

    <link rel="apple-touch-icon" sizes="180x180" href="/assets/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <link rel="mask-icon" href="/assets/img/favicon/safari-pinned-tab.svg" color="#fe7000">
    <link rel="shortcut icon" href="/favicon.ico">
    <meta name="msapplication-TileColor" content="#fe7000">
    <meta name="msapplication-config" content="/assets/img/favicon/browserconfig.xml">
    <meta name="theme-color" content="#fe7000">

    <meta property="og:locale" content="nl_NL" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Bevrijdingsdance Emmen | <?= $pageName ?>" />
    <meta property="og:description" content="Twee dagen lang oranje gekte! Op <?= ucfirst(strftime('%A', strtotime('26-04-' . $eventYear)));?> 26 en <?= ucfirst(strftime('%A', strtotime('27-04-' . $eventYear)));?> 27 April keren de Koningsfeesten namelijk weer terug naar parkeerterrein De Vreding in Emmen.">
    <meta property="og:url" content="https://<?= $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?>" />
    <meta property="og:site_name" content="Bevrijdingsdance Emmen" />
    <meta property="og:image" content="https://<?= $_SERVER['HTTP_HOST'] ?>/assets/img/open_graph.jpg" />
    <meta property="og:image:secure_url" content="https://<?= $_SERVER['HTTP_HOST'] ?>/assets/img/open_graph.jpg" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:description" content="Twee dagen lang oranje gekte! Op <?= ucfirst(strftime('%A', strtotime('26-04-' . $eventYear)));?> 26 en <?= ucfirst(strftime('%A', strtotime('27-04-' . $eventYear)));?> 27 April keren de Koningsfeesten namelijk weer terug naar parkeerterrein De Vreding in Emmen." />
    <meta name="twitter:title" content="Bevrijdingsdance Emmen | <?= $pageName ?>" />
    <meta name="twitter:image" content="https://<?= $_SERVER['HTTP_HOST'] ?>/assets/img/open_graph.jpg" />

    <link rel="stylesheet" type="text/css" href="/assets/style/style.min.css?v=0.1">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.css" />

    <script src="https://kit.fontawesome.com/28adfb2000.js" crossorigin="anonymous"></script>

</head>
<body>
    <!-- Google Tag Manager (noscript) -->

    <!-- End Google Tag Manager (noscript) -->

    <header <?php if($pageName === '26 & 27 April'){echo 'class="frontpage"';}else{echo 'class="page"';} ?>>
        <nav>
            <div class="container-fluid">
                <div id="logo">
                    <a href="/">
                        <img src="/assets/img/logo.png" alt="Logo Bevrijdingsdance Emmen">
                    </a>
                </div>
                <aside>
                    <a class="aside-logo" href="/">
                        <img src="/assets/img/logo.png" alt="Logo Bevrijdingsdance Emmen">
                    </a>
                    <div class="main">
                        <a href="/">Home</a>
                        <a href="/tickets/">Tickets</a>
                        <a href="/line-up/">Line-up</a>
                        <a href="https://www.facebook.com/groups/873336536456377/" target="_blank" rel=”noopener”>Ambassadeurs</a>
                        <a href="/info/">Info</a>
                        <a href="/contact/">Contact</a>
                    </div>
                    <div class="socialmedia">
                        <a href="https://www.facebook.com/bevrijdingsdanceemmen/" target="_blank" rel=”noopener” aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/bevrijdingsdanceemmen/" target="_blank" rel=”noopener” aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                    </div>
                </aside>
                <button class="navbar-toggle" onclick="toggleMenu(this)" aria-label="Menu">
                    <span></span>
                    <span></span>
                </button>
            </div>
        </nav>
    </header>
    <div id="artwork" <?php if($pageName === '26 & 27 April'){echo 'class="frontpage"';}else{echo 'class="page"';} ?>>
        <div class="layer butterflies">
            <img src="/assets/img/butterfly1.png" alt="Butterfly">
            <img src="/assets/img/butterfly2.png" alt="Butterfly">
            <img src="/assets/img/butterfly1.png" alt="Butterfly">
            <img src="/assets/img/butterfly1.png" alt="Butterfly">
            <img src="/assets/img/butterfly2.png" alt="Butterfly">
        </div>
        <div class="layer tickets">
            <a href="/tickets/" class="button white">Koop nu tickets</a>
        </div>
        <div class="layer lion">
            <div class="mask"></div>
            <img src="/assets/img/lion.png" alt="Lion">
        </div>
        <div class="layer gashorns">
            <div class="mask"></div>
            <img src="/assets/img/gashorns.png" alt="Gashorn">
        </div>
        <div class="layer windmill">
            <img src="/assets/img/windmill.png" alt="Windmill">
        </div>
        <div class="layer shadow">
            <svg height="60" width="500">
                <ellipse cx="250" cy="30" rx="150" ry="15" />
                <ellipse cx="250" cy="30" rx="250" ry="30" />
            </svg>
        </div>
        <p class="layer title">Bevrijdings<br>Dance</p>
    </div>
