$(document).ready(function () {
    $("#reg_form").submit(function(event) {
        event.preventDefault(); // Cancel the submit
        var
            form = $(this),
            submitButton = $('#regButton'),
            formMessage = $('#form_message'),
            configUrl = window.location.origin;
            //configUrl = form.attr("action");
        
        $.ajax ({
            url: configUrl + "/configs/form-config.php",
            //url: configUrl,
            data: form.serialize(),
            method: "POST",
            beforeSend: function() {
                submitButton.text("Wait...");
            },
            success: function(response) {
                submitButton.text("Sign in");
                if (response.trim() === "Done") {
                    form[0].reset();
                    formMessage.html("You have successfully registered");
                }
                else {
                    console.log(response);
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

function funcSuccess(response) {
    $("#form_message").html(data);
    if ( ~data.indexOf("Ви увійшли у кабінет!") ) {
        $(location).attr("href", "home.php");
    }
}
