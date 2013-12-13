<?php /* Smarty version Smarty-3.1.7, created on 2013-12-10 16:13:43
         compiled from "/Applications/AMPPS/www/vtiger6/includes/runtime/../../layouts/vlayout/modules/Vtiger/dashboards/History.tpl" */ ?>
<?php /*%%SmartyHeaderCode:83906869052a73db721a790-06632530%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dca9014b9b4b47dac16217abe5c4606e3dc71885' => 
    array (
      0 => '/Applications/AMPPS/www/vtiger6/includes/runtime/../../layouts/vlayout/modules/Vtiger/dashboards/History.tpl',
      1 => 1380782177,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '83906869052a73db721a790-06632530',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'WIDGET' => 0,
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_52a73db728d2f',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52a73db728d2f')) {function content_52a73db728d2f($_smarty_tpl) {?>
<div class="dashboardWidgetHeader">
	<table width="100%" cellspacing="0" cellpadding="0">
	<thead>
		<tr>
			<th class="span4">
				<div class="dashboardTitle" title="<?php echo vtranslate($_smarty_tpl->tpl_vars['WIDGET']->value->getTitle(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"><b>&nbsp;&nbsp;<?php echo vtranslate($_smarty_tpl->tpl_vars['WIDGET']->value->getTitle());?>
</b></div>
			</th>
			<th class="span2">
				<div>
					<select class="widgetFilter" id="historyType" name="type" style='width:100px;margin-bottom:0px'>
						<option value="all" ><?php echo vtranslate('LBL_ALL');?>
</option>
						<option value="comments" ><?php echo vtranslate('LBL_COMMENTS');?>
</option>
						<option value="updates" ><?php echo vtranslate('LBL_UPDATES');?>
</option>
					</select>
				</div>
			</th>
			<th class="refresh span1" align="right">
				<span style="position:relative;"></span>
			</th>
			<th class="widgeticons span5" align="right">
				<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("dashboards/DashboardHeaderIcons.tpl",$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			</th>
		</tr>
	</thead>
	</table>
</div>
<div class="dashboardWidgetContent">
	<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("dashboards/HistoryContents.tpl",$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div><?php }} ?>