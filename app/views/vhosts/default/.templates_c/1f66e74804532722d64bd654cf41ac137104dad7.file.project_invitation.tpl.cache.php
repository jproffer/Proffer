<?php /* Smarty version Smarty-3.1.7, created on 2013-02-13 20:32:57
		 compiled from "/home/firewall/www/vs.profferlabs.com/app/views/vhosts/default/Client/email_templates/project_invitation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:114308878511bf879032a25-93493645%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1f66e74804532722d64bd654cf41ac137104dad7' => 
    array (
      0 => '/home/firewall/www/vs.profferlabs.com/app/views/vhosts/default/Client/email_templates/project_invitation.tpl',
      1 => 1360781977,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '114308878511bf879032a25-93493645',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'inviter' => 0,
    'name' => 0,
    'hash' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_511bf87905dae',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_511bf87905dae')) {function content_511bf87905dae($_smarty_tpl) {?><html>
	<body>
		Congratulations!<br /><br />
		
		You have been invited by <b><?php echo $_smarty_tpl->tpl_vars['inviter']->value;?>
</b> to participate in project &quot;<b><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</b>&quot;.  Please login at <a href='http://www.storymixmedia.com/accounts/login/'>http://www.storymixmedia.com/accounts/login/</a> and use invite code <?php echo $_smarty_tpl->tpl_vars['hash']->value;?>
.
	</body>
</html><?php }} ?>