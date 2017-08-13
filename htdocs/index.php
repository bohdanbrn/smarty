<?php
    require('../configs/setup.php');

    $smarty = new Smarty_GuestBook();

    $smarty->assign('title', 'Registration');

    $smarty->display('index.tpl');
    
?>