<?php
    session_start();
    /*
    require('../htdocs/setup.php');

    $smarty = new Smarty_GuestBook();

    $smarty->assign('email', '$smarty.post.email');

    echo $email;
    */
    
    require('../configs/config.php');

    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $repeat_password = trim($_POST['repeat_password']);

    //captcha
    $user_answer = trim($_POST['user_answer']);
    $true_answer = trim($_SESSION['rand_code']);

    if ( isset($email) && isset($password) && isset($repeat_password) && isset($user_answer) ) {
        //check passwords
        if ( $password === $repeat_password ) {
            //check captcha
            if ( $user_answer === $true_answer ) {
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
                    echo "Could not successfully run query from DB: " . mysql_error(); 
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
    //echo "Done";
?>