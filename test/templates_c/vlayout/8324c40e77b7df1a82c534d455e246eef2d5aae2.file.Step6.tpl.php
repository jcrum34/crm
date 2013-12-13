<?php /* Smarty version Smarty-3.1.7, created on 2013-12-10 16:12:39
         compiled from "/Applications/AMPPS/www/vtiger6/includes/runtime/../../layouts/vlayout/modules/Install/Step6.tpl" */ ?>
<?php /*%%SmartyHeaderCode:83656002252a73d779391b0-91567328%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8324c40e77b7df1a82c534d455e246eef2d5aae2' => 
    array (
      0 => '/Applications/AMPPS/www/vtiger6/includes/runtime/../../layouts/vlayout/modules/Install/Step6.tpl',
      1 => 1380782177,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '83656002252a73d779391b0-91567328',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'APPUNIQUEKEY' => 0,
    'CURRENT_VERSION' => 0,
    'PASSWORD' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_52a73d779973a',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52a73d779973a')) {function content_52a73d779973a($_smarty_tpl) {?>

<center><?php echo vtranslate('LBL_LOADING_PLEASE_WAIT');?>
...</center>

<form class="form-horizontal" name="step6" method="post" action="?module=Users&action=Login">
	<img src="//stats.vtiger.com/stats.php?uid=<?php echo $_smarty_tpl->tpl_vars['APPUNIQUEKEY']->value;?>
&v=<?php echo $_smarty_tpl->tpl_vars['CURRENT_VERSION']->value;?>
&type=I" alt='' title='' border=0 width='1px' height='1px'>
	<input type=hidden name="username" value="admin" >
	<input type=hidden name="password" value="<?php echo $_smarty_tpl->tpl_vars['PASSWORD']->value;?>
" >
</form>
<script type="text/javascript">
	jQuery(function() { /* Delay to let page load complete */ setTimeout(function() { jQuery('form[name="step6"]').submit(); }, 150); });
</script>
<?php }} ?>