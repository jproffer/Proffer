<?php /* Smarty version Smarty-3.1.7, created on 2013-02-17 18:58:31
		 compiled from "/home/firewall/www/vs.profferlabs.com/app/views/vhosts/default/Public/Accounts/register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2871738555121285739f6b2-14860786%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10605e39ee8184ace22d9e980539e97971a8934e' => 
    array (
      0 => '/home/firewall/www/vs.profferlabs.com/app/views/vhosts/default/Public/Accounts/register.tpl',
      1 => 1360208136,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2871738555121285739f6b2-14860786',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_512128573cf28',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_512128573cf28')) {function content_512128573cf28($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("includes/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<div id="toplong" class="panel">
	<div id="registersection">
		<form method='post' autocomplete="on" name='frmRegister' id='frmRegister'>
			<div class='section'>
				<fieldset>
					<legend>Login Preferences</legend>
					<div class="row">
						<div class="label">Email Address</div>
						<div class="field w300"><input class="w200 required email" id="email" name="email" type="text" placeholder="example@example.com" /></div>
					</div>
					<div class="row">
						<div class="label">Password</div>
						<div class="field w300"><input class="w200 required" id="pwd" name="pwd" type="password"  /></div>
					</div>
					<div class="row">
						<div class="label">Repeat Password</div>
						<div class="field w300"><input class="w200 required" id="pwd2" name="pwd2" type="password" /></div>
					</div>
				</fieldset>
				<fieldset>
					<legend>Registration Information</legend>
				<div class="row">
					<div class="label"></div>
					<div class="toplabel w200">First</div>
					<div class="toplabel w50">M.I.</div>
					<div class="toplabel w200">Last</div>
				</div>
				<div class="row">
					<div class="label">Name</div>
					<div class="field w200"><input class="w150 required" id="fname" name="fname" type="text" placeholder="John"  /></div>
					<div class="field w50"><input class="w20" id="mi" name="mi" type="text" placeholder="D" title="Middle Initial" size="2" maxlength="1" /></div>
					<div class="field w200"><input class="w150 required" id="lname" name="lname" type="text" placeholder="Smith" /></div>
				</div>
			</fieldset>
			<fieldset>
				<div class="row">
					<div class="label"></div>
					<div class="field w150">
						<input type="submit" name="submit" id="submit" value="Register" class="ui-button" />
					</div>
				</div>
			</fieldset>
			</div>
		</form>
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("includes/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<?php }} ?>