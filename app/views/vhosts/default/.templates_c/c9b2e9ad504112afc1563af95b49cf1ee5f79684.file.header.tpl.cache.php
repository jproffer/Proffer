<?php /* Smarty version Smarty-3.1.7, created on 2013-01-09 03:26:16
		 compiled from "/var/www/vs.profferlabs.com//app/views/vhosts/default/Public/includes/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:69254890550ece35889d4c6-42986925%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9b2e9ad504112afc1563af95b49cf1ee5f79684' => 
    array (
      0 => '/var/www/vs.profferlabs.com//app/views/vhosts/default/Public/includes/header.tpl',
      1 => 1357664486,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '69254890550ece35889d4c6-42986925',
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
  'unifunc' => 'content_50ece35891dff',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50ece35891dff')) {function content_50ece35891dff($_smarty_tpl) {?><!DOCTYPE html >
<html>
<head>
<title>Company Title</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta http-equiv="content-language" content="en" />
		<meta name="robots" content="all,follow" />
		<?php echo $_smarty_tpl->tpl_vars['cssincludes']->value;?>

		<?php echo $_smarty_tpl->tpl_vars['jsincludes']->value;?>


</head>
<body>
<div id="main">
  <div id="top">
	<div style="float:right"> <span style="display:block; padding-top:30px"></span> </div>
	<span style='float: left;'><a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['themepath']->value;?>
/images/logo.png" alt=""  class="border_none" /></a></span>
	<span style='line-height: 100px; height: 100px; padding: 0px; margin: 0px; float: left; font-size: 48px; font-weight: bold; font-family: Verdana, Tahoma, Arial;'>
		Company ABC
	</span>
  </div>
  <div id="header">
	<div class="menubar">
	</div>
  </div>
<?php }} ?>