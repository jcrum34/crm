<?php /* Smarty version Smarty-3.1.7, created on 2013-12-11 08:25:21
         compiled from "/Applications/AMPPS/www/vtiger6/includes/runtime/../../layouts/vlayout/modules/Settings/PickListDependency/EditView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:103389422152a8217192a9f7-20184667%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2dc636249f9ff635722bf05af5b6440f86626b72' => 
    array (
      0 => '/Applications/AMPPS/www/vtiger6/includes/runtime/../../layouts/vlayout/modules/Settings/PickListDependency/EditView.tpl',
      1 => 1373768345,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '103389422152a8217192a9f7-20184667',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'QUALIFIED_MODULE' => 0,
    'MAPPED_VALUES' => 0,
    'PICKLIST_MODULES_LIST' => 0,
    'MODULE_MODEL' => 0,
    'MODULE_NAME' => 0,
    'SELECTED_MODULE' => 0,
    'PICKLIST_FIELDS' => 0,
    'FIELD_NAME' => 0,
    'RECORD_MODEL' => 0,
    'FIELD_LABEL' => 0,
    'DEPENDENCY_GRAPH' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_52a821719d130',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52a821719d130')) {function content_52a821719d130($_smarty_tpl) {?>
<div class="container-fluid"><div class="widget_header"><h3><?php echo vtranslate('LBL_PICKLIST_DEPENDENCY',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h3></div><hr><div class="contents row-fluid"><form id="pickListDependencyForm" class="form-horizontal"><?php if (!empty($_smarty_tpl->tpl_vars['MAPPED_VALUES']->value)){?><input type="hidden" class="editDependency" value="true"/><?php }?><div class="row-fluid"><div class="control-group"><label class="muted control-label"><?php echo vtranslate('LBL_SELECT_MODULE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><div class="controls"><span class="row-fluid"><select name="sourceModule" class="select2 span3"><?php  $_smarty_tpl->tpl_vars['MODULE_MODEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['MODULE_MODEL']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['PICKLIST_MODULES_LIST']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['MODULE_MODEL']->key => $_smarty_tpl->tpl_vars['MODULE_MODEL']->value){
$_smarty_tpl->tpl_vars['MODULE_MODEL']->_loop = true;
?><?php $_smarty_tpl->tpl_vars['MODULE_NAME'] = new Smarty_variable($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->get('name'), null, 0);?><option value="<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['MODULE_NAME']->value==$_smarty_tpl->tpl_vars['SELECTED_MODULE']->value){?> selected <?php }?>><?php echo vtranslate($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->get('label'),$_smarty_tpl->tpl_vars['MODULE_MODEL']->value->get('label'));?>
</option><?php } ?></select></span></div></div></div><div class="row-fluid"><div class="span4 control-group"><label class="muted control-label"><?php echo vtranslate('LBL_SOURCE_FIELD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><div class="controls"><span class="row-fluid"><select id="sourceField" name="sourceField" class="select2 row-fluid" data-placeholder="<?php echo vtranslate('LBL_SELECT_FIELD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><option value=''></option><?php  $_smarty_tpl->tpl_vars['FIELD_LABEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['FIELD_LABEL']->_loop = false;
 $_smarty_tpl->tpl_vars['FIELD_NAME'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['PICKLIST_FIELDS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_LABEL']->key => $_smarty_tpl->tpl_vars['FIELD_LABEL']->value){
$_smarty_tpl->tpl_vars['FIELD_LABEL']->_loop = true;
 $_smarty_tpl->tpl_vars['FIELD_NAME']->value = $_smarty_tpl->tpl_vars['FIELD_LABEL']->key;
?><option value="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['RECORD_MODEL']->value->get('sourcefield')==$_smarty_tpl->tpl_vars['FIELD_NAME']->value){?> selected <?php }?>><?php echo vtranslate($_smarty_tpl->tpl_vars['FIELD_LABEL']->value,$_smarty_tpl->tpl_vars['SELECTED_MODULE']->value);?>
</option><?php } ?></select></span></div></div><div class="span4 control-group marginLeftZero"><label class="muted control-label"><?php echo vtranslate('LBL_TARGET_FIELD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><div class="controls"><span class="row-fluid"><select id="targetField" name="targetField" class="select2 row-fluid" data-placeholder="<?php echo vtranslate('LBL_SELECT_FIELD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><option value=''></option><?php  $_smarty_tpl->tpl_vars['FIELD_LABEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['FIELD_LABEL']->_loop = false;
 $_smarty_tpl->tpl_vars['FIELD_NAME'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['PICKLIST_FIELDS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_LABEL']->key => $_smarty_tpl->tpl_vars['FIELD_LABEL']->value){
$_smarty_tpl->tpl_vars['FIELD_LABEL']->_loop = true;
 $_smarty_tpl->tpl_vars['FIELD_NAME']->value = $_smarty_tpl->tpl_vars['FIELD_LABEL']->key;
?><option value="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['RECORD_MODEL']->value->get('targetfield')==$_smarty_tpl->tpl_vars['FIELD_NAME']->value){?> selected <?php }?>><?php echo vtranslate($_smarty_tpl->tpl_vars['FIELD_LABEL']->value,$_smarty_tpl->tpl_vars['SELECTED_MODULE']->value);?>
</option><?php } ?></select></span></div></div></div><div class="row-fluid hide errorMessage"><div class="alert alert-error"><strong><?php echo vtranslate('LBL_ERR_CYCLIC_DEPENDENCY',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></div></div><div id="dependencyGraph"><?php if ($_smarty_tpl->tpl_vars['DEPENDENCY_GRAPH']->value){?><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('DependencyGraph.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }?></div></form></div></div></div>
<?php }} ?>