<?php
/* Smarty version 3.1.30, created on 2017-08-09 18:58:01
  from "e:\OSPanel\domains\smarty\templates\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_598b3109ddb1e4_21893405',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ba5fbde5c2044d949f5c914663cb428b5138bfd' => 
    array (
      0 => 'e:\\OSPanel\\domains\\smarty\\templates\\index.tpl',
      1 => 1502294276,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:form.tpl' => 1,
  ),
),false)) {
function content_598b3109ddb1e4_21893405 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'e:\\OSPanel\\domains\\smarty\\includes\\Smarty\\libs\\plugins\\modifier.date_format.php';
$_smarty_tpl->compiled->nocache_hash = '929955949598b3109d7f073_94916728';
?>



<html>
<head>
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
</head>
<body>


<!-- HTML comment that is sent to the browser -->



<?php $_smarty_tpl->_subTemplateRender("file:form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php echo smarty_modifier_date_format(time(),"%Y-%m-%d");?>


<?php echo Smarty::SMARTY_VERSION;?>


</body>
</html>
<?php }
}
