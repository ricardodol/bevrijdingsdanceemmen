<?php

$pageName = 'Informatie';

include_once './inc/header.php';

?>

<main>
    <section id="faq" itemscope itemtype="https://schema.org/FAQPage">
        <div class="container">
            <p class="subtitle">Alles wat je wilt weten</p>
            <h1>Informatie</h1>

            <p>De Bevrijdingsdance Emmen vinden plaats op <?= ucfirst(strftime('%A', strtotime('26-04-' . $eventYear)));?> 26 April van 17:00 tot 00:00 uur en op <?= ucfirst(strftime('%A', strtotime('27-04-' . $eventYear)));?> 27 April van 14:00 tot 00:00 uur op parkeerterrein De Vreding in het centrum van Emmen. Omdat iedereen de verjaardag van onze Koning wil vieren zijn de Koningsfeesten voor alle leeftijden. </p>

            <div class="faq" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <div class="question">
                    <h3  itemprop="name">Ticketverkoop</h3>
                    <div class="answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text">Om het terrein te betreden heb je een geldige ticket nodig. Deze tickets kun je <a href="/tickets/">hier</a> online in de voorverkoop kopen. Zolang de voorraad strekt zal er bij de entree van het festivalterrein ook deurverkoop zijn. Houd onze Facebookpagina hiervoor in de gaten!</p>
                    </div>
                </div>
            </div>

            <div class="faq" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <div class="question">
                    <h3  itemprop="name">Aankomst</h3>
                    <div class="answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text">Bij de entree laat je je online gekochte ticket scannen om toegang te krijgen tot het festivalterrein. Dit kan door het ticket thuis te printen of te downloaden op je mobiele telefoon. </p>
                    </div>
                </div>
            </div>

            <div class="faq" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <div class="question">
                    <h3  itemprop="name">Consumptiemunten</h3>
                    <div class="answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text">Op het festivalterrein betaal je je drankjes en eten met consumptiemunten. Deze consumptiemunten kunnen worden gekocht op het terrein en worden niet teruggenomen. Bij alle kassa’s zijn pinautomaten aanwezig. Contante betalingen zijn natuurlijk ook altijd mogelijk.  </p>
                    </div>
                </div>
            </div>

            <div class="faq" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <div class="question">
                    <h3  itemprop="name">Drankverkoop</h3>
                    <div class="answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text">
                            Voor bezoekers onder de 18 jaar is het niet toegestaan alcohol te kopen en/of te consumeren. Alcohol wordt door onze crew uitsluitend geschonken aan 18+ en enkel en alleen op vertoon van een alcoholbandje. Met jouw geldige ID bewijs kun je bij de entree een alcoholbandje ontvangen. Let wel op! Deze bandjes zijn persoonsgebonden en dus niet over te dragen aan iemand anders. Kapotte bandjes kunnen alleen worden ingewisseld voor een nieuw bandje op vertoon van een geldig ID bewijs én het kapotte bandje. Fraude met zowel de bandjes als ID bewijzen wordt niet getolereerd door de organisatie en leidt tot directe ontzegging van het festivalterrein.<br>
                            Bezoekers van 18 jaar en ouder wordt verboden alcohol aan bezoekers jonger dan 18 jaar door te geven. In het geval wij dit opmerken volgt direct verwijdering van het festivalterrein.
                        </p>
                    </div>
                </div>
            </div>

            <div class="faq" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <div class="question">
                    <h3  itemprop="name">Roken</h3>
                    <div class="answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text">De Koningsfeesten worden in de openlucht georganiseerd en dus mag er op het festivalterrein gerookt worden. </p>
                    </div>
                </div>
            </div>

            <div class="faq" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <div class="question">
                    <h3  itemprop="name">Huisregels</h3>
                    <div class="answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text">Wanneer je het festivalterrein betreedt gelden er enkele huisregels. Deze kun je <a href="/huisregels/">hier</a> lezen. </p>
                    </div>
                </div>
            </div>

            <div class="faq" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <div class="question">
                    <h3  itemprop="name">Wat mag NIET mee op het festivalterrein?</h3>
                    <div class="answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <ul itemprop="text">
                            <li>
                                Eten en drinken in welke verpakking dan ook
                            </li>
                            <li>
                                Drugs en andere hallucinerende middelen (waaronder lachgas)
                            </li>
                            <li>
                                Wapens of andere voorwerpen die als wapen kunnen worden gebruikt
                            </li>
                            <li>
                                Giftige, brandbare of explosieve materialen
                            </li>
                            <li>
                                Paraplu’s
                            </li>
                            <li>
                                Toeters, gashoorns en andere hinderlijke geluidsmakers
                            </li>
                            <li>
                                Vuurwerk
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="faq" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <div class="question">
                    <h3  itemprop="name">Bereikbaarheid</h3>
                    <div class="answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text">Parkeerterrein De Vreding ligt in het centrum van Emmen en is daardoor goed bereikbaar met de fiets, auto en openbaar vervoer. Je auto of fiets kun je parkeren op de daarvoor bestemde plekken in het centrum. Ga je met het openbaar vervoer? Kies dan voor Emmen Centrum als jouw eindhalte. Vanaf hier loop je binnen een minuut het festivalterrein op.</p>
                    </div>
                </div>
            </div>

            <div class="faq" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <div class="question">
                    <h3  itemprop="name">Het weer</h3>
                    <div class="answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text">Wij gaan er natuurlijk van uit dat het stralend weer zal zijn tijdens de Koningsfeesten! Maar omdat we het in Nederland nooit zeker weten is het verstandig om je voor te bereiden op ieder weertype. Draag laagjes kleding, zorg eventueel voor regenkleding en goede schoenen. Paraplu’s mogen niet meegenomen worden op het festivalterrein, poncho’s wel!  </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include_once './inc/footer.php'; ?>

