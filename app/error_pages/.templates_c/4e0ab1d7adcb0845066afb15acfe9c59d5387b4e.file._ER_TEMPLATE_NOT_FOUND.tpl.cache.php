<?php /* Smarty version Smarty-3.1.7, created on 2013-03-18 15:35:12
		 compiled from "/home/firewall/www/vs.profferlabs.com/app/error_pages/_ER_TEMPLATE_NOT_FOUND.tpl" */ ?>
<?php /*%%SmartyHeaderCode:78565002151473430d1a636-22789799%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4e0ab1d7adcb0845066afb15acfe9c59d5387b4e' => 
    array (
      0 => '/home/firewall/www/vs.profferlabs.com/app/error_pages/_ER_TEMPLATE_NOT_FOUND.tpl',
      1 => 1360221133,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '78565002151473430d1a636-22789799',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'resource' => 0,
    'themepath' => 0,
    'userpath' => 0,
    'templatepath' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_51473430d4ee4',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51473430d4ee4')) {function content_51473430d4ee4($_smarty_tpl) {?><html>
	<head>
		<style media="screen">
			
		</style>
	</head>
	<body>
		Template: <?php echo $_smarty_tpl->tpl_vars['resource']->value;?>
<br />
		Theme: <?php echo $_smarty_tpl->tpl_vars['themepath']->value;?>
<br />
		User: <?php echo $_smarty_tpl->tpl_vars['userpath']->value;?>
<br />
		Template Path: <?php echo $_smarty_tpl->tpl_vars['templatepath']->value;?>

		<br /><br />
		<img src="/media/404.jpg" />
	</body>
</html><?php }} ?>