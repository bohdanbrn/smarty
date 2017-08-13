<?php
/* Smarty version 3.1.30, created on 2017-08-13 17:38:22
  from "f:\OpenServer\domains\smarty\templates\form.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5990645e5e2e68_25702577',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '339ba7404dd891261ddb0bc86a6ab2f73fe3b0dd' => 
    array (
      0 => 'f:\\OpenServer\\domains\\smarty\\templates\\form.tpl',
      1 => 1502635086,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5990645e5e2e68_25702577 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="center">
    <h1>Registration</h1>
    <form action="form-config.php" name="reg_form" method="post" id="reg_form">
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
        <div class="formRow">
            <img src="../htdocs/captcha.php" id="reg_captcha" class="captcha">
            <input class="userCaptcha" type="text" name="user_captcha" placeholder="enter captcha" required>
        </div>
        <button id="reg_button" class="formButton">Sign up</button>
    </form>
    <div id="form_message"></div>
</div>
<?php }
}
