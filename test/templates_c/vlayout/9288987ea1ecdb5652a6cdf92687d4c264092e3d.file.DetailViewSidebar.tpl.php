<?php /* Smarty version Smarty-3.1.7, created on 2013-12-10 16:15:31
         compiled from "/Applications/AMPPS/www/vtiger6/includes/runtime/../../layouts/vlayout/modules/Vtiger/DetailViewSidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:114850567752a73e239bee81-35455265%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9288987ea1ecdb5652a6cdf92687d4c264092e3d' => 
    array (
      0 => '/Applications/AMPPS/www/vtiger6/includes/runtime/../../layouts/vlayout/modules/Vtiger/DetailViewSidebar.tpl',
      1 => 1373768345,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '114850567752a73e239bee81-35455265',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'QUALIFIED_MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_52a73e239c6cb',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52a73e239c6cb')) {function content_52a73e239c6cb($_smarty_tpl) {?>
<div class="row-fluid"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SideBar.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><?php }} ?>