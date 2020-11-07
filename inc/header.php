<?php
setlocale(LC_ALL, 'nl_NL');
$eventYear = 2020;
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <!-- Created by RD-Designs - www.rd-designs.nl - Copyright Bevrijdingsdanceemmen -->

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-NHHWCLV');</script>
    <!-- End Google Tag Manager -->

    <meta charset="UTF-8">
<!--    <meta name="description" content="Twee dagen lang oranje gekte! Op --><?//= ucfirst(strftime('%A', strtotime('26-04-' . $eventYear)));?><!-- 26 en --><?//= ucfirst(strftime('%A', strtotime('27-04-' . $eventYear)));?><!-- 27 April keren de Koningsfeesten namelijk weer terug naar parkeerterrein De Vreding in Emmen.">-->
    <meta name="keywords" content="Café de Zwetser, Zwetser, Emmen, Festival, Bevrijdingsdag, Bevrijding, Vrijheid, Liberation Day, Bevrijdingsdance Bevrijdingsdanceemmen, Dance, Feest">
    <meta name="author" content="RD-Designs">
    <link rel="canonical" href="https://bevrijdingsdanceemmen.nl" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= $pageName ?> | Bevrijdingsdance Emmen</title>

    <link rel="apple-touch-icon" sizes="180x180" href="/assets/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <link rel="mask-icon" href="/assets/img/favicon/safari-pinned-tab.svg" color="#223689">
    <link rel="shortcut icon" href="/favicon.ico">
    <meta name="msapplication-TileColor" content="#223689">
    <meta name="msapplication-config" content="/assets/img/favicon/browserconfig.xml">
    <meta name="theme-color" content="#223689">

    <meta property="og:locale" content="nl_NL" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Bevrijdingsdance Emmen | <?= $pageName ?>" />
<!--    <meta property="og:description" content="Twee dagen lang oranje gekte! Op --><?//= ucfirst(strftime('%A', strtotime('26-04-' . $eventYear)));?><!-- 26 en --><?//= ucfirst(strftime('%A', strtotime('27-04-' . $eventYear)));?><!-- 27 April keren de Koningsfeesten namelijk weer terug naar parkeerterrein De Vreding in Emmen.">-->
    <meta property="og:url" content="https://<?= $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?>" />
    <meta property="og:site_name" content="Bevrijdingsdance Emmen" />
    <meta property="og:image" content="https://<?= $_SERVER['HTTP_HOST'] ?>/assets/img/open_graph.jpg" />
    <meta property="og:image:secure_url" content="https://<?= $_SERVER['HTTP_HOST'] ?>/assets/img/open_graph.jpg" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta name="twitter:card" content="summary_large_image" />
<!--    <meta name="twitter:description" content="Twee dagen lang oranje gekte! Op --><?//= ucfirst(strftime('%A', strtotime('26-04-' . $eventYear)));?><!-- 26 en --><?//= ucfirst(strftime('%A', strtotime('27-04-' . $eventYear)));?><!-- 27 April keren de Koningsfeesten namelijk weer terug naar parkeerterrein De Vreding in Emmen." />-->
    <meta name="twitter:title" content="Bevrijdingsdance Emmen | <?= $pageName ?>" />
    <meta name="twitter:image" content="https://<?= $_SERVER['HTTP_HOST'] ?>/assets/img/open_graph.jpg" />

    <link rel="stylesheet" type="text/css" href="/assets/style/style.min.css?v=0.1">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.css" />
    <link rel="stylesheet" type="text/css" href="https://fa.rd-designs.nl/css/all.min.css">

</head>
<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NHHWCLV"
                      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <header <?php if($pageName === '5 Mei'){echo 'class="frontpage"';}else{echo 'class="page"';} ?>>
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
<!--                        <a href="https://www.facebook.com/groups//" target="_blank" rel=”noopener”>Ambassadeurs</a>-->
                        <a href="/info/">Info</a>
                        <a href="/contact/">Contact</a>
                    </div>
                    <div class="socialmedia">
                        <a href="https://www.facebook.com/Bevrijdingsdance/" target="_blank" rel=”noopener” aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/bevrijdingsfestivalemmen/" target="_blank" rel=”noopener” aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                    </div>
                </aside>
                <button class="navbar-toggle" onclick="toggleMenu(this)" aria-label="Menu">
                    <span></span>
                    <span></span>
                </button>
            </div>
        </nav>
    </header>
    <div id="artwork" <?php if($pageName === '5 Mei'){echo 'class="frontpage"';}else{echo 'class="page"';} ?>>
        <div class="layer tickets">
            <a href="/tickets/" class="button white">Koop nu tickets</a>
        </div>
        <div class="layer logo-partly">
            <div class="mask"></div>
            <img src="/assets/img/logo-partly.png" alt="Logo Partly">
        </div>
        <div class="layer flags">
            <img class="flag-left" src="/assets/img/flag-left.png" alt="Flag">
            <img class="flag-right" src="/assets/img/flag-right.png" alt="Flag">
        </div>
        <div class="layer shadow">
            <svg height="60" width="500">
                <ellipse cx="250" cy="30" rx="150" ry="15" />
                <ellipse cx="250" cy="30" rx="250" ry="30" />
            </svg>
        </div>
        <p class="layer title">Bevrijdings<br>Dance</p>
    </div>
