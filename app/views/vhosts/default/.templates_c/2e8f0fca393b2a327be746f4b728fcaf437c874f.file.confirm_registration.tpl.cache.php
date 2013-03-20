<?php /* Smarty version Smarty-3.1.7, created on 2013-02-10 17:42:34
		 compiled from "/home/firewall/www/vs.profferlabs.com/app/views/vhosts/default/Public/email_templates/confirm_registration.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17945822785117dc0a369f27-32950836%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e8f0fca393b2a327be746f4b728fcaf437c874f' => 
    array (
      0 => '/home/firewall/www/vs.profferlabs.com/app/views/vhosts/default/Public/email_templates/confirm_registration.tpl',
      1 => 1360208841,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17945822785117dc0a369f27-32950836',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5117dc0a391d1',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5117dc0a391d1')) {function content_5117dc0a391d1($_smarty_tpl) {?><html>
	<body>
		Welcome to StoryMix!<br /><br />
		
		Please confirm your account by clicking this link. <a href='<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
'><?php echo $_smarty_tpl->tpl_vars['link']->value;?>
</a>.  If you cannot click the link, copy and paste it into your browser.
	</body>
</html><?php }} ?>