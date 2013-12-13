<?php /* Smarty version Smarty-3.1.7, created on 2013-12-12 09:51:33
         compiled from "/Applications/AMPPS/www/vtiger6/includes/runtime/../../layouts/vlayout/modules/Inventory/PopupContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:184646946552a98725495142-20689354%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f91046320f6b605b2b0f993cd6e8ad9e6089eadd' => 
    array (
      0 => '/Applications/AMPPS/www/vtiger6/includes/runtime/../../layouts/vlayout/modules/Inventory/PopupContents.tpl',
      1 => 1380782177,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '184646946552a98725495142-20689354',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_52a987254cc17',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52a987254cc17')) {function content_52a987254cc17($_smarty_tpl) {?>
<div id='popupContentsDiv'><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("PopupEntries.tpl",$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div>
<?php }} ?>