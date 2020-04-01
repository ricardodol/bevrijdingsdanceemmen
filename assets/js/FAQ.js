$( "#faq .faq .question h3" ).click(function() {
    $(this).parent().toggleClass('open');

    $(this).parent().children(".answer").slideToggle( "slow", function() {});
});
