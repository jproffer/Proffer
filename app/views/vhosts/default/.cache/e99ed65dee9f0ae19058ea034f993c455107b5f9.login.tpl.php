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
    '51a11d6b52842e78ca61bf77b4eb3b04bd98cadd' => 
    array (
      0 => '/home/firewall/www/vs.profferlabs.com/app/views/vhosts/default/Public/includes/header.tpl',
      1 => 1360222085,
      2 => 'file',
    ),
    '900b93d6ce7e8f0e7dd5d03bedca56e92fdc5d13' => 
    array (
      0 => '/home/firewall/www/vs.profferlabs.com/app/views/vhosts/default/Public/includes/menu.tpl',
      1 => 1360221969,
      2 => 'file',
    ),
    '9ad057f63160082092c6c783276c5f9eb59c8bfc' => 
    array (
      0 => '/home/firewall/www/vs.profferlabs.com/app/views/vhosts/default/Public/includes/footer.tpl',
      1 => 1359254353,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7400131395145028ea11652-00269345',
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5145028ea5d1a',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5145028ea5d1a')) {function content_5145028ea5d1a($_smarty_tpl) {?><!DOCTYPE html >
<html>
<head>
<title>Company Title</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta http-equiv="content-language" content="en" />
		<meta name="robots" content="all,follow" />
		<style type='text/css' media='screen' charset='utf-8'>@import url('/themes/default/inc_000_reset.css?24045995');
@import url('/themes/default/inc_010_jquery.css?506022825');
@import url('/themes/default/inc_030_file-upload.css?3932438815');
@import url('/themes/default/inc_040_file-upload-noscript.css?91114233');
@import url('/cache/css/inc_020_main.css');
@import url('/cache/css/inc_022_albums.css');
@import url('/cache/css/inc_024_storyboard.css');
@import url('/cache/css/inc_050_topmenu.css');
@import url('/themes/default/plugins/colorbox.css?2271957919');
</style>
		<script type='text/javascript' src='/js/jquery.js?1622415766'></script>
<script type='text/javascript' src='/js/jqueryui.js?3554238949'></script>
<script type='text/javascript' src='/js/touchpunch.js?1356476795'></script>
<script type='text/javascript' src='/js/plugins/jquery/colorbox.js?123472484'></script>
<script type='text/javascript' src='/js/plugins/jquery/validate.js?798737007'></script>
<script type='text/javascript' src='/get/js/name/Public_Auth_login'></script>

		<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
		<script type="text/javascript" src="/js/Includes/menu.js"></script>


</head>
<body>
<div id="main">
  <div id="header">
	<div style="float:right"> <span style="display:block; padding-top:30px"></span> </div>
	<span style='float: left;'><a href="#"><img src="/themes/default/images/logo.png" alt=""  class="border_none" /></a></span>
	<div id="topmenu">
		<div id="smoothmenu" class="ddsmoothmenu">
<ul class="parentmenu">
<li><a href="/accounts/register">Register</a></li>
<li><a href="/auth/login">Login</a></li>
</ul>
<br style="clear: left" />
</div>

	</div>
  </div>

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
<div id="footer">
  <div >Copyright (c) 2013 <a href='#'>Storymix Media, Inc.</a></div>
</div>
</html>
<?php }} ?>