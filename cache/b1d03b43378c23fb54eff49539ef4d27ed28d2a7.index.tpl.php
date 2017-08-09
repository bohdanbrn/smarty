<?php
/* Smarty version 3.1.30, created on 2017-08-10 00:31:43
  from "f:\OpenServer\domains\smarty\templates\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_598b7f3f93ee64_24161138',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd4375459118637bb0cb07db4b2489298a19ae843' => 
    array (
      0 => 'f:\\OpenServer\\domains\\smarty\\templates\\index.tpl',
      1 => 1502314271,
      2 => 'file',
    ),
    '339ba7404dd891261ddb0bc86a6ab2f73fe3b0dd' => 
    array (
      0 => 'f:\\OpenServer\\domains\\smarty\\templates\\form.tpl',
      1 => 1502313559,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_598b7f3f93ee64_24161138 (Smarty_Internal_Template $_smarty_tpl) {
?>


<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
    <link href="../includes/css/style.css" rel="stylesheet" type="text/css"/>
</head>
<body>
    <div id="center">
    <h1>Registration</h1>
    <form action="../configs/form-config.php" name="reg_form" method="post" id="reg_form">
        <div class="formRow">
            <label>email:</label>
            <input class="formField" type="email" name="email" placeholder="email" autofocus required>
        </div>
        <div class="formRow">
            <div><label>Password:</label></div>
            <input class="formField" type="password" name="password" placeholder="Password" required>
        </div>
        <div class="formRow">
            <div><label>Repeat password:</label></div>
            <input class="formField" type="password" name="repeat_password" placeholder="Repeat password" required>
        </div>
        <button id="regButton" class="formButton">Sign in</button>
    </form>
    <div id="form_message"></div>
</div>

    <script type="text/javascript" src="../includes/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="../includes/js/form-config.js"></script>
</body>
</html>
<?php }
}
