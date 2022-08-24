$(function () {
    $('#contactform').on('submit', function (e) {
        e.preventDefault();

        grecaptcha.ready(function () {
            grecaptcha.execute('6Le6AdoUAAAAAMLdutcDABEPCEqvCBM4EALYL5Y7', { action: 'contact' }).then(function (token) {
                $('#recaptcha_token').val(token);

                $.ajax({
                    type: 'post',
                    url: '/inc/send_form_email.php',
                    dataType: 'JSON',
                    data: $('#contactform').serialize(),
                    success: function(response) {
                        if (response) {
                            $('#contactform_msg').html(response.formMsg);
                            if(!response.error){
                                $('#contactform').remove();
                            }
                        } else {
                            $('#contactform_msg').text('Error!');
                        }
                    },
                    error: function() {
                        $('#contactform_msg').text('Error!');
                    }
                });
            });
        });
    });
});
