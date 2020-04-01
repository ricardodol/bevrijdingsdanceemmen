function toggleMenu(el) {
    $('header nav aside').toggleClass('active');
    $('body').toggleClass('menu-active');
    $(el).toggleClass('active');
}
