<?php
    /*
    require('../htdocs/setup.php');

    $smarty = new Smarty_GuestBook();

    $smarty->assign('email', '$smarty.post.email');

    echo $email;
    */
    
    require('config.php');

    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $repeat_password = trim($_POST['repeat_password']);

    if ( isset($email) && isset($password) && isset($repeat_password) ) {
        if ( $password === $repeat_password ) {
            //Check the similarity of the email in the database

            //save in to db
            $sql = "INSERT INTO `users` (`id`, `email`, `password`) VALUES (NULL, '$email', '$password')";
			$result = mysql_query($sql);
			if ( $result ) {
				echo "Done";
			}
			else {
				echo "Could not successfully run query from DB: " . mysql_error(); 
			}
        }
        else {
            echo "Enter the same passwords";
        }
    }
    else {
        echo "Not all fields are filled";
    }
    //echo "Done";
?>