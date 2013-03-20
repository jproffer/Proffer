<?php /* Smarty version Smarty-3.1.7, created on 2013-03-20 03:37:03
		 compiled from "/home/firewall/www/vs.profferlabs.com/app/views/vhosts/default/Client/includes/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:65179353151492edf023f71-58788550%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd09c536007830edb2f84e199d62a1a1329de7440' => 
    array (
      0 => '/home/firewall/www/vs.profferlabs.com/app/views/vhosts/default/Client/includes/header.tpl',
      1 => 1361909427,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '65179353151492edf023f71-58788550',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cssincludes' => 0,
    'jsincludes' => 0,
    'themepath' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_51492edf0341e',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51492edf0341e')) {function content_51492edf0341e($_smarty_tpl) {?><!DOCTYPE html >
<html>
<head>
	<title>Company Title</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta http-equiv="content-language" content="en" />
	<meta http-equiv="cache-control" content="no-cache" />
	<meta name="robots" content="all,follow" />
	<?php echo $_smarty_tpl->tpl_vars['cssincludes']->value;?>

	<?php echo $_smarty_tpl->tpl_vars['jsincludes']->value;?>

	<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<script type="text/javascript" src="/js/hoverintent.js"></script>
	<script type="text/javascript" src="/js/Includes/menu.js"></script>
	<script type="text/javascript" src="/js/Includes/Client/menu.js"></script>
	<script type="text/javascript" src="/js/Includes/global.js"></script>

</head>
<body>
<div id="main">
  <div id="header">
	<div style="float:right"> <span style="display:block; padding-top:30px"></span> </div>
	<span style='float: left;'><a href="#"><img id="logo" src="<?php echo $_smarty_tpl->tpl_vars['themepath']->value;?>
/images/logo.png" alt=""  class="border_none" /></a></span>
	<div id="topmenu">
		<?php echo $_smarty_tpl->getSubTemplate ("includes/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

	</div>
  </div>
<?php }} ?>