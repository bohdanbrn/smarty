<?php
    session_start();

    header('Content-type: text/html; charset=utf-8');

    require_once('../configs/config.php');
    require_once('../includes/php/check_form.php');

    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $repeat_pass = trim($_POST['repeat_password']);

    //captcha
    $user_captcha = trim($_POST['user_captcha']);
    $true_captcha = trim($_SESSION['rand_code']);
    
    if ( isset($email) && isset($password) && isset($repeat_pass) && isset($user_captcha) )
    {   
        $checkForm = new CheckForm($email, $password, $repeat_pass, $user_captcha);
    
        $checkForm->checkEmail($connect, $email);
        $checkForm->checkPass($password, $repeat_pass);
        $checkForm->checkCaptcha($user_captcha, $true_captcha);
        
        if ( $checkForm->result['success'] === true )
            $checkForm->saveUser($connect, $email, $password);
        
        echo json_encode($checkForm->result);
    }


    /*
    if ( isset($email) && isset($password) && isset($repeat_pass) && isset($user_captcha) ) {
        //check passwords
        if ( $password === $repeat_pass ) {
            //check captcha
            if ( $user_captcha === $true_captcha ) {
                //Check the similarity of the email in the database

                //save in to db
                $sql = "INSERT INTO `users` (`id`, `email`, `password`) VALUES (NULL, '$email', '$password')";
                $result = mysqli_query($connect, $sql);
                if ( $result ) {
                    //echo "<script>$('#form_message').attr('class', 'success');</script>";
                    echo "Done";
                }
                else {
                    //echo "<script>$('#form_message').attr('class', 'warning');</script>";
                    echo "Could not successfully run query from DB: " . mysqli_error(); 
                }
            }
            else {
                //echo "<script>$('#form_message').attr('class', 'warning');</script>";
                echo "Field captcha entered incorrectly";
            }
        }
        else {
            //echo "<script>$('#form_message').attr('class', 'warning');</script>";
            echo "Enter the same passwords";
        }
    }
    else {
        echo "Not all fields are filled";
    }
    */
    //echo "Done";
?>