<?php
/* Smarty version 3.1.30, created on 2017-08-09 18:58:01
  from "e:\OSPanel\domains\smarty\templates\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_598b3109e5c995_66115088',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ba5fbde5c2044d949f5c914663cb428b5138bfd' => 
    array (
      0 => 'e:\\OSPanel\\domains\\smarty\\templates\\index.tpl',
      1 => 1502294276,
      2 => 'file',
    ),
    'd710fb68d880abc8aa8d81c811f2e42941382e53' => 
    array (
      0 => 'e:\\OSPanel\\domains\\smarty\\templates\\form.tpl',
      1 => 1502284363,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_598b3109e5c995_66115088 (Smarty_Internal_Template $_smarty_tpl) {
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

2017-08-09

3.1.30

</body>
</html>
<?php }
}
