<?php

$pageName = 'Tickets';

include_once './inc/header.php';

?>

<main>
    <section id="tickets">
        <div class="container">
            <p class="subtitle">De ticket shop</p>
            <h1>Tickets</h1>
            <p>Koop nu je tickets voor Bevrijdingsdance Emmen. Dit kan door op de knop hieronder te klikken of in het scherm daaronder.</p>

            <button id="example-widget-trigger" type="button" class="button orange">Koop nu tickets</button>

            <br>

            <div id="eventbrite-widget-container-74352150283"></div>

            <script src="https://www.eventbrite.nl/static/widgets/eb_widgets.js"></script>

            <script type="text/javascript">
                let purchaseCallback = function() {
                    gtag('event', 'purchase');
                };

                window.EBWidgets.createWidget({
                    // Required
                    widgetType: 'checkout',
                    eventId: '95860494319',
                    modal: true,
                    modalTriggerElementId: "example-widget-trigger",
                    onOrderComplete: purchaseCallback  // Method called when an order has successfully completed
                });

                window.EBWidgets.createWidget({
                    // Required
                    widgetType: 'checkout',
                    eventId: '95860494319',
                    iframeContainerId: 'eventbrite-widget-container-74352150283',

                    // Optional
                    iframeContainerHeight: 1200,  // Widget height in pixels. Defaults to a minimum of 425px if not provided
                    onOrderComplete: purchaseCallback  // Method called when an order has successfully completed
                });
            </script>

        </div>
    </section>
</main>

<?php include_once './inc/footer.php'; ?>

