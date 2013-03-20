<?php /*%%SmartyHeaderCode:15726882345120833a500818-04659642%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd1cc12e657c66e381c55ff60564334a3b90d5c4f' => 
    array (
      0 => '/home/firewall/www/vs.profferlabs.com/app/views/vhosts/default/Client/Projects/join.tpl',
      1 => 1360796208,
      2 => 'file',
    ),
    '0cafc79e9443bfda04ed9bdf138a224ea95bce8d' => 
    array (
      0 => '/home/firewall/www/vs.profferlabs.com/app/views/vhosts/default/Client/includes/headerless.tpl',
      1 => 1360784436,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15726882345120833a500818-04659642',
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5120833a53ca9',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5120833a53ca9')) {function content_5120833a53ca9($_smarty_tpl) {?><!DOCTYPE html >
<html>
<head>
	<title>Company Title</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta http-equiv="content-language" content="en" />
	<meta http-equiv="cache-control" content="no-cache" />
	<meta name="robots" content="all,follow" />
	<style type='text/css' media='screen' charset='utf-8'>@import url('/themes/default/inc_0_reset.css?24045995');
@import url('/themes/default/inc_1_jquery.css?506022825');
@import url('/themes/default/inc_3_file-upload.css?3932438815');
@import url('/themes/default/inc_4_file-upload-noscript.css?91114233');
@import url('/cache/css/inc_2_main.css');
@import url('/cache/css/inc_5_topmenu.css');
</style>
	<script type='text/javascript' src='/js/jquery.js?4046275924'></script>
<script type='text/javascript' src='/js/jqueryui.js?3554238949'></script>

	<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

</head>
<body>

<form name="frmJoin" id="frmJoin">
	<div class='section' style='overflow:hidden;'>
		<div class="panel">
			<div class='row'>
				<div class="label">Invitation Code:</div>
				<div class="w200">
					<input type='text' name='joincode' id='joincode' />
				</div>
			</div>
			<div class='row'>
				<div class='label'>&nbsp;</div>
				<div class='w50'>
					<input type='button' name='joinProject' id='joinProject' value='Join' />
				</div>
			</div>
		</div>
	</div>
</form>
</body>
</html><?php }} ?>