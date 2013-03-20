<?php /* Smarty version Smarty-3.1.7, created on 2013-03-16 23:38:54
		 compiled from "/home/firewall/www/vs.profferlabs.com/app/views/vhosts/default/Public/includes/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13412840655145028ea422b2-09100622%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '51a11d6b52842e78ca61bf77b4eb3b04bd98cadd' => 
    array (
      0 => '/home/firewall/www/vs.profferlabs.com/app/views/vhosts/default/Public/includes/header.tpl',
      1 => 1360222085,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13412840655145028ea422b2-09100622',
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
  'unifunc' => 'content_5145028ea5257',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5145028ea5257')) {function content_5145028ea5257($_smarty_tpl) {?><!DOCTYPE html >
<html>
<head>
<title>Company Title</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta http-equiv="content-language" content="en" />
		<meta name="robots" content="all,follow" />
		<?php echo $_smarty_tpl->tpl_vars['cssincludes']->value;?>

		<?php echo $_smarty_tpl->tpl_vars['jsincludes']->value;?>

		<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
		<script type="text/javascript" src="/js/Includes/menu.js"></script>


</head>
<body>
<div id="main">
  <div id="header">
	<div style="float:right"> <span style="display:block; padding-top:30px"></span> </div>
	<span style='float: left;'><a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['themepath']->value;?>
/images/logo.png" alt=""  class="border_none" /></a></span>
	<div id="topmenu">
		<?php echo $_smarty_tpl->getSubTemplate ("includes/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

	</div>
  </div>
<?php }} ?>