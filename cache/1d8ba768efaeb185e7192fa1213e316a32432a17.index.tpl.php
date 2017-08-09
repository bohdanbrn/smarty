<?php
/* Smarty version 3.1.30, created on 2017-08-09 18:07:02
  from "e:\OSPanel\domains\task1\templates\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_598b2516ea79d7_41641862',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eaf91c56a87bf8f7811e1f881a02892c4fd50566' => 
    array (
      0 => 'e:\\OSPanel\\domains\\task1\\templates\\index.tpl',
      1 => 1502287011,
      2 => 'file',
    ),
    'cf56ba2483febad377cd0dba8c95c710fc2ef077' => 
    array (
      0 => 'e:\\OSPanel\\domains\\task1\\templates\\form.tpl',
      1 => 1502284363,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_598b2516ea79d7_41641862 (Smarty_Internal_Template $_smarty_tpl) {
?>



<html>
<head>
<title></title>
</head>
<body>


<!-- HTML comment that is sent to the browser -->



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
<div id="form_message"></div>

</body>
</html>
<?php }
}
