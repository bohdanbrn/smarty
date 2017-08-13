$(document).ready(function () {
    $("#reg_form").submit(function(event) {
        event.preventDefault(); // Cancel the submit
        var
            form = $(this),
            submitButton = $('#reg_button'),
            formMessage = $('#form_message'),
            reg_captcha = $('#reg_captcha'),
            configUrl = window.location.origin;
            //configUrl = form.attr("action");
        
        $.ajax ({
            url: configUrl + "/htdocs/form-config.php",
            //url: configUrl,
            data: form.serialize(),
            dataType: "json",
            method: "POST",
            beforeSend: function() {
                submitButton.text("Wait...");
            },
            success: function(response) {
                submitButton.text("Sign up");
                //console.log(response);
                formMessage.html("");
                if (response['success'] === false) {
                    formMessage.attr('class', 'warning');
                }
                else {
                    form[0].reset();
                    reg_captcha.attr("src", "../htdocs/captcha.php");
                    formMessage.attr('class', 'success');
                }
                for (var i = 0; i < response['messages'].length; i++) {
                    formMessage.append(response['messages'][i] + "<br>");
                }
            },
            error: function(response) {
                formMessage.html("Check your Internet connection");
                console.log(response);
            }
        });
    });
});
