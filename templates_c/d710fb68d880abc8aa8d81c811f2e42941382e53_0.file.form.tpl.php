<?php
/* Smarty version 3.1.30, created on 2017-08-10 15:21:21
  from "e:\OSPanel\domains\smarty\templates\form.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_598c4fc189dbe0_71351079',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd710fb68d880abc8aa8d81c811f2e42941382e53' => 
    array (
      0 => 'e:\\OSPanel\\domains\\smarty\\templates\\form.tpl',
      1 => 1502367680,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_598c4fc189dbe0_71351079 (Smarty_Internal_Template $_smarty_tpl) {
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
            <input class="userAnswer" type="text" name="user_answer" placeholder="enter captcha" required>
        </div>
        <button id="regButton" class="formButton">Sign in</button>
    </form>
    <div id="form_message"></div>
</div><?php }
}
