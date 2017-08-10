<?php
/* Smarty version 3.1.30, created on 2017-08-10 10:37:20
  from "e:\OSPanel\domains\smarty\templates\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_598c0d302d0276_47244947',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ba5fbde5c2044d949f5c914663cb428b5138bfd' => 
    array (
      0 => 'e:\\OSPanel\\domains\\smarty\\templates\\index.tpl',
      1 => 1502350451,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:form.tpl' => 1,
  ),
),false)) {
function content_598c0d302d0276_47244947 (Smarty_Internal_Template $_smarty_tpl) {
?>


<!DOCTYPE html>
<html>
<head>
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
    <link href="../includes/css/style.css" rel="stylesheet" type="text/css"/>
</head>
<body>
    <?php $_smarty_tpl->_subTemplateRender("file:form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <?php echo '<script'; ?>
 type="text/javascript" src="../includes/js/jquery-3.2.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="../includes/js/form-config.js"><?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
