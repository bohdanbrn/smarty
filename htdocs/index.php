<?php
    require('setup.php');

    $smarty = new Smarty_GuestBook();

    $smarty->assign('name','Bohdan');

    $smarty->display('index.tpl');
?>