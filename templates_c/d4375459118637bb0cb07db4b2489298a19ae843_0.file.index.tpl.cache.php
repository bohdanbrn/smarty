<?php
/* Smarty version 3.1.30, created on 2017-08-10 00:31:43
  from "f:\OpenServer\domains\smarty\templates\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_598b7f3f92be77_94368657',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd4375459118637bb0cb07db4b2489298a19ae843' => 
    array (
      0 => 'f:\\OpenServer\\domains\\smarty\\templates\\index.tpl',
      1 => 1502314271,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:form.tpl' => 1,
  ),
),false)) {
function content_598b7f3f92be77_94368657 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '15503598b7f3f8d0463_28948799';
?>


<!DOCTYPE html>
<html>
<head>
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
    <link href="../includes/css/style.css" rel="stylesheet" type="text/css"/>
</head>
<body>
    <?php $_smarty_tpl->_subTemplateRender("file:form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
