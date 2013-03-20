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
  'nocache_hash' => '2871738555121285739f6b2-14860786',
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_512128573ed0c',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_512128573ed0c')) {function content_512128573ed0c($_smarty_tpl) {?><!DOCTYPE html >
<html>
<head>
<title>Company Title</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta http-equiv="content-language" content="en" />
		<meta name="robots" content="all,follow" />
		<style type='text/css' media='screen' charset='utf-8'>@import url('/themes/default/inc_0_reset.css?24045995');
@import url('/themes/default/inc_1_jquery.css?506022825');
@import url('/themes/default/inc_3_file-upload.css?3932438815');
@import url('/themes/default/inc_4_file-upload-noscript.css?91114233');
@import url('/cache/css/inc_2_main.css');
@import url('/cache/css/inc_5_topmenu.css');
@import url('/themes/default/plugins/colorbox.css?2271957919');
</style>
		<script type='text/javascript' src='/js/jquery.js?4046275924'></script>
<script type='text/javascript' src='/js/jqueryui.js?3554238949'></script>
<script type='text/javascript' src='/js/plugins/jquery/colorbox.js?223878822'></script>
<script type='text/javascript' src='/js/plugins/jquery/validate.js?798737007'></script>
<script type='text/javascript' src='/get/js/name/Public_Accounts_register'></script>

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
<div id="footer">
  <div >Copyright (c) 2013 <a href='#'>Storymix Media, Inc.</a></div>
</div>
</html>

<?php }} ?>