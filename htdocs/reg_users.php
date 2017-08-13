<?php
    require('../configs/setup.php');
    require('../configs/config.php');

    $smarty = new Smarty_GuestBook();

    $smarty->assign('title','Registered users');


    $sql = "SELECT * FROM users";
    $result = mysqli_query($connect, $sql);
    if ( !result ) {
	    echo "Could not successfully run query from DB: " . mysql_error(); 
    }
    else {
        if ( mysqli_num_rows($result) == 0 ) { 
            echo "Nothing found!"; 
        }
        else {
            $users = array();
            while ( $users[] = mysqli_fetch_assoc($result) ) {}
            $smarty->assign('users', $users);
        }
    }
    $smarty->display('reg_users.tpl');
    
?>