const controller = new ScrollMagic.Controller();

// Header
const nav = new TimelineMax({})
    .to('header nav', 0.5, {backgroundColor: 'white', boxShadow: '0 0 1.5em rgba(255, 102, 51, 0.1)', ease: Power2.out}, 0)
    .to('header nav, header nav a', 0.5, {color: '#223689', ease: Power2.out}, 0)
    .to('header nav button span', 0.5, {background: '#223689', ease: Power2.out}, 0)
    .to('header nav #logo', 0.5, {width: '4em', ease: Power2.out}, 0);

// Artwork
const artwork = new TimelineMax({})
    .to('#artwork .title, #artwork .shadow, #artwork .tickets', 0.3, {scale: 0}, 0)
    .to('#artwork .lion .mask, #artwork .gashorns .mask', 2, {opacity: '1'}, 0)
    .to('#artwork .lion, #artwork .gashorns', 0, {opacity: '0'}, 2);

if (Modernizr.mq('screen and (min-width: 1500px)')){
    // Artwork
    artwork
        .to('#artwork .lion, #artwork .gashorns', 1, {height: '70%'}, 0)
        .to('#artwork .butterflies', 1, {left: '3%', right: '3%'}, 0)
        .to('#artwork .windmill', 1, {right: '-6%', bottom: '-1%'}, 0);

}else if (Modernizr.mq('screen and (min-width: 992px)')){
    // Artwork
    artwork
        .to('#artwork .lion, #artwork .gashorns', 1, {height: '70%'}, 0)
        .to('#artwork .butterflies', 1, {left: '0%', right: '0%'}, 0)
        .to('#artwork .windmill', 1, {right: '-7%', bottom: '-1%'}, 0);
}else{
    // Artwork
    artwork
        .to('#artwork .lion, #artwork .gashorns', 1, {height: '50%'}, 0)
        .to('#artwork .butterflies', 1, {left: '-35%', right: '-40%'}, 0)
        .to('#artwork .windmill', 1, {right: '-50%', bottom: '-10%'}, 0);
}

// Header
new ScrollMagic.Scene({triggerElement: 'main', triggerHook: 'onLeave', offset: '-200'})
    .setTween(nav)
    .addTo(controller);

// Artwork
new ScrollMagic.Scene({triggerElement: 'header', duration: '100%', triggerHook: 'onLeave'})
    .setTween(artwork)
    .addTo(controller);
