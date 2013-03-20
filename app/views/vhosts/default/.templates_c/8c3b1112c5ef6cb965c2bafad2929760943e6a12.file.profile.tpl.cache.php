<?php /* Smarty version Smarty-3.1.7, created on 2013-02-22 07:50:51
		 compiled from "/home/firewall/www/vs.profferlabs.com/app/views/vhosts/default/Client/Accounts/profile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9054241935127235bc04324-56322500%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8c3b1112c5ef6cb965c2bafad2929760943e6a12' => 
    array (
      0 => '/home/firewall/www/vs.profferlabs.com/app/views/vhosts/default/Client/Accounts/profile.tpl',
      1 => 1360093893,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9054241935127235bc04324-56322500',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5127235bc394d',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5127235bc394d')) {function content_5127235bc394d($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("includes/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<div id="toplong" class="panel">
		<form method='post' autocomplete="on" name='frmProfile' id='frmProfile'>
		<div id="tabs">
			<ul>
				<li><a href="#tabs-1">Profile</a></li>
				<li><a href="#tabs-2">Shipping</a></li>
				<li><a href="#tabs-3">Billing</a></li>
			</ul>
			<div id='tabs-1' class='section'>
				<?php echo $_smarty_tpl->getSubTemplate ("Accounts/profile_profile.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

			</div>
			<div id='tabs-2' class='section'>
				<?php echo $_smarty_tpl->getSubTemplate ("Accounts/profile_shipping.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

			</div>
			<div id='tabs-3' class='section'>
				<?php echo $_smarty_tpl->getSubTemplate ("Accounts/profile_billing.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

			</div>
			<fieldset>
				<div class="row">
					<div class="label"></div>
					<div class="field w150">
						<input type="submit" name="submit" id="submit" value="Save" class="ui-widget ui-button-text-only ui-corner-all" />
					</div>
				</div>
			</fieldset>
	</div>
	</form>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("includes/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
<?php }} ?>