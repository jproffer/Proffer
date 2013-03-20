<?php /* Smarty version Smarty-3.1.7, created on 2013-03-16 23:38:54
		 compiled from "/home/firewall/www/vs.profferlabs.com/app/views/vhosts/default/Public/Auth/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7400131395145028ea11652-00269345%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e99ed65dee9f0ae19058ea034f993c455107b5f9' => 
    array (
      0 => '/home/firewall/www/vs.profferlabs.com/app/views/vhosts/default/Public/Auth/login.tpl',
      1 => 1360883781,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7400131395145028ea11652-00269345',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5145028ea3f18',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5145028ea3f18')) {function content_5145028ea3f18($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("includes/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<div style='overflow: hidden; margin: 0 auto;'>
<div class="panel" style="overflow:hidden; float: left;">
	<div id="loginsection">
				<fieldset>
					<legend>Login</legend>
		<form method='post' autocomplete="on" name='frmLogin' id='frmLogin'>
			<div class='section'>
					<div class="row">
						<div class="label">Email Address</div>
						<div class="field w300"><input class="w200" id="email" name="email" type="text" placeholder="example@example.com" /></div>
					</div>
					<div class="row">
						<div class="label">Password</div>
						<div class="field w300"><input class="w200" id="pwd" name="pwd" type="password"  /></div>
					</div>
				<div class="row">
					<div class="label"></div>
					<div class="field w150">
						<input type="submit" name="submit" id="submit" value="Login" class="ui-button" />
					</div>
				</div>
			</div>
		</form>
		</fieldset>
	</div>
</div>
<div class="panel"  style="float: left; overflow: hidden;">
	<div id="registersection">
		<fieldset>
			<legend>Register</legend>
			<form method='post' autocomplete="on" name='frmRegister' id='frmRegister'>
				<div class='section'>
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
					<div class="row">
						<div class="label"></div>
						<div class="field w150">
							<input type="submit" name="submit" id="submit" value="Register" class="uibutton" />
						</div>
					</div>
				</div>
			</form>
		</fieldset>
	</div>
</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("includes/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
<?php }} ?>