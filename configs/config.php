<?php
    $host = "localhost";
    $db_name = "smarty";
    $login = "root";
    $pswrd = "";

    @$connect = mysqli_connect("$host", "$login", "$pswrd", "$db_name");
    
    //check connection
    if ( mysqli_connect_errno() ) {
        printf( "Connect failed: %s\n", mysqli_connect_error() );
        exit();
    }
    
    /*
    @$connect = mysql_connect("$host", "$login", "$pswrd");
    if(!$connect) {
        exit(mysql_error());
    }
    else {
        mysql_select_db("$db_name",$connect);
    }
    mysql_query("SET NAMES utf8");
    */
    
?>