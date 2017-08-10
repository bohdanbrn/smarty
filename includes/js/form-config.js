$(document).ready(function () {
    $("#reg_form").submit(function(event) {
        event.preventDefault(); // Cancel the submit
        var
            form = $(this),
            submitButton = $('#regButton'),
            formMessage = $('#form_message'),
            reg_captcha = $('#reg_captcha'),
            configUrl = window.location.origin;
            //configUrl = form.attr("action");
        
        $.ajax ({
            url: configUrl + "/htdocs/form-config.php",
            //url: configUrl,
            data: form.serialize(),
            dataType: "html",
            method: "POST",
            beforeSend: function() {
                submitButton.text("Wait...");
            },
            success: function(response) {
                submitButton.text("Sign in");
                if (response.trim() === "Done") {
                    form[0].reset();
                    reg_captcha.attr("src", "../htdocs/captcha.php");
                    formMessage.attr('class', 'success');
                    formMessage.html("You have successfully registered");
                }
                else {
                    console.log(response);
                    formMessage.attr('class', 'warning');
                    //formMessage.html("Something went wrong :(");
                    formMessage.html(response);
                }
            },
            error: function() {
                alert("Check your Internet connection");
            }
        });
    });
});
