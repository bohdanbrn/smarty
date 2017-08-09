<?php
/* Smarty version 3.1.30, created on 2017-08-10 01:34:39
  from "f:\OpenServer\domains\smarty\templates\reg_users.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_598b8dff592708_63525580',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '60a08928974fa162a98b3b0dee22c259213c71f1' => 
    array (
      0 => 'f:\\OpenServer\\domains\\smarty\\templates\\reg_users.tpl',
      1 => 1502318033,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_598b8dff592708_63525580 (Smarty_Internal_Template $_smarty_tpl) {
?>


<!DOCTYPE html>
<html>
<head>
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
    <link href="../includes/css/style.css" rel="stylesheet" type="text/css"/>
</head>
<body>
    <div id="center">
        <h1>Registered users</h1>
        <table>
            <thead>
                <tr>
                    <td>id</td>
                    <td>email</td>
                    <td>password</td>
                </tr>
            </thead>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['user']->value['password'];?>
</td>
                </tr>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </table>
    </div>
</body>
</html>


<?php }
}
