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
    .to('#artwork .logo-partly .mask', 2, {opacity: '1'}, 0)
    .to('#artwork .logo-partly', 0, {opacity: '0'}, 2)
    .to('#artwork .flags', 1, {left: 0, right: 0}, 0);

if (Modernizr.mq('screen and (min-width: 1500px)')){
    // Artwork
    artwork
        .to('#artwork .logo-partly', 1, {height: '40%'}, 0)
        .to('#artwork .flags .flag-left', 1, {left: '90%'}, 0)
        .to('#artwork .flags .flag-right', 1, {right: '90%'}, 0);

}else if (Modernizr.mq('screen and (min-width: 992px)')){
    // Artwork
    artwork
        .to('#artwork .logo-partly', 1, {height: '40%'}, 0)
        .to('#artwork .flags .flag-left', 1, {left: '90%'}, 0)
        .to('#artwork .flags .flag-right', 1, {right: '90%'}, 0);
}else{
    // Artwork
    artwork
        .to('#artwork .logo-partly', 1, {height: '30%'}, 0)
        .to('#artwork .flags .flag-left', 1, {left: '90%'}, 0)
        .to('#artwork .flags .flag-right', 1, {right: '90%'}, 0);
}

// Header
new ScrollMagic.Scene({triggerElement: 'main', triggerHook: 'onLeave', offset: '-200'})
    .setTween(nav)
    .addTo(controller);

// Artwork
new ScrollMagic.Scene({triggerElement: 'header', duration: '100%', triggerHook: 'onLeave'})
    .setTween(artwork)
    .addTo(controller);
