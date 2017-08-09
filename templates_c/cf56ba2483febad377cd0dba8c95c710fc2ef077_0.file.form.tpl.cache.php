<?php
/* Smarty version 3.1.30, created on 2017-08-09 16:12:47
  from "e:\OSPanel\domains\task1\templates\form.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_598b0a4f3552e1_19564891',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cf56ba2483febad377cd0dba8c95c710fc2ef077' => 
    array (
      0 => 'e:\\OSPanel\\domains\\task1\\templates\\form.tpl',
      1 => 1502284363,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_598b0a4f3552e1_19564891 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1459862650598b0a4f327956_01786246';
?>
<form id="login_form" name="login_form" method="post">
    <div class="formRow">
        <label>email:</label><br>
        <input class="formField" type="email" name="email" placeholder="email" autofocus required>
    </div>
    <div class="formRow">
        <div><label>Password:</label></div>
        <input class="formField" type="password" name="password" placeholder="Password" required>
        <div><label>Repeat password:</label></div>
        <input class="formField" type="password" name="repeat_password" placeholder="Repeat password" required>
    </div>
    <button class="formButton">Увійти</button>
</form>
<div id="form_message"></div><?php }
}
