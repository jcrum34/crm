<?php /* Smarty version Smarty-3.1.7, created on 2013-12-11 08:25:19
         compiled from "/Applications/AMPPS/www/vtiger6/includes/runtime/../../layouts/vlayout/modules/Settings/PickListDependency/ListViewActions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:67957219752a8216f638011-46309147%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f775b9317e88f094f928bc7768348bab9584cf9f' => 
    array (
      0 => '/Applications/AMPPS/www/vtiger6/includes/runtime/../../layouts/vlayout/modules/Settings/PickListDependency/ListViewActions.tpl',
      1 => 1373768345,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '67957219752a8216f638011-46309147',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'QUALIFIED_MODULE' => 0,
    'PICKLIST_MODULES_LIST' => 0,
    'MODULE_MODEL' => 0,
    'MODULE_NAME' => 0,
    'FOR_MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_52a8216f6724c',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52a8216f6724c')) {function content_52a8216f6724c($_smarty_tpl) {?>
<span class="pull-right listViewActions"><select class="chzn-select span3 pickListSupportedModules"><option value=""><?php echo vtranslate('LBL_ALL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><?php  $_smarty_tpl->tpl_vars['MODULE_MODEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['MODULE_MODEL']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['PICKLIST_MODULES_LIST']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['MODULE_MODEL']->key => $_smarty_tpl->tpl_vars['MODULE_MODEL']->value){
$_smarty_tpl->tpl_vars['MODULE_MODEL']->_loop = true;
?><?php $_smarty_tpl->tpl_vars['MODULE_NAME'] = new Smarty_variable($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->get('name'), null, 0);?><option value="<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['MODULE_NAME']->value==$_smarty_tpl->tpl_vars['FOR_MODULE']->value){?> selected <?php }?>><?php echo vtranslate($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->get('label'),$_smarty_tpl->tpl_vars['MODULE_MODEL']->value->get('label'));?>
</option><?php } ?></select></span><?php }} ?>