<?php /* Smarty version Smarty-3.1.7, created on 2013-03-16 23:38:55
		 compiled from "/home/firewall/www/vs.profferlabs.com/app/views/vhosts/default/Client/Accounts/dashboard.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1534272295145028f1c35e5-24742058%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e4caa027790b09cc0aea8dc916c4b757f48dc5f4' => 
    array (
      0 => '/home/firewall/www/vs.profferlabs.com/app/views/vhosts/default/Client/Accounts/dashboard.tpl',
      1 => 1360570617,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1534272295145028f1c35e5-24742058',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'projects' => 0,
    'project' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5145028f20657',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5145028f20657')) {function content_5145028f20657($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("includes/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<form>
<div id="toplong" class="panel">
	<h3>My Projects</h3>
	<div class='section'>
	<?php  $_smarty_tpl->tpl_vars['project'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['project']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['projects']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['project']->key => $_smarty_tpl->tpl_vars['project']->value){
$_smarty_tpl->tpl_vars['project']->_loop = true;
?>
		<div class="row">
			<div class="label">Project:</div>
			<div class="field w100"><a href='/projects/edit/project/<?php echo $_smarty_tpl->tpl_vars['project']->value->getID();?>
'><?php echo $_smarty_tpl->tpl_vars['project']->value->name;?>
</a></div>
		</div>
		<div class="row">
			<div class="label">&nbsp;</div>
			<div class="field w250">
				Share: <input type='text' value='<?php echo $_smarty_tpl->tpl_vars['project']->value->share_code;?>
' READONLY class="w50" />&nbsp;
				<input type="button" value="Copy" class="btnCopy ui-button ui-corner-all" cpyValue="<?php echo $_smarty_tpl->tpl_vars['project']->value->share_code;?>
" />
			</div>
		</div>
	<?php } ?>
	</div>
</div>
</form>
<?php echo $_smarty_tpl->getSubTemplate ("includes/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
<?php }} ?>