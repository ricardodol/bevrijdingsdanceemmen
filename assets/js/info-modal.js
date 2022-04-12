$('#info-modal .modal-content .close').on('click', function(e) {
    $('#info-modal').hide();
    localStorage.setItem("BevrijdingsdanceEmmenInfoPopUp", "true");
});

$(document).on('click', function(e) {
    if( $(e.target).closest('#info-modal .modal-content').length > 0 ) {
        return false;
    }

    $('#info-modal').hide();
    localStorage.setItem("BevrijdingsdanceEmmenInfoPopUp", "true");
});

if (localStorage.getItem("BevrijdingsdanceEmmenInfoPopUp") !== "true") {
    $('#info-modal').show();
}
