<?php /* Smarty version Smarty-3.1.7, created on 2013-02-13 20:32:57
		 compiled from "/home/firewall/www/vs.profferlabs.com/app/views/vhosts/default/Client/Projects/invite_success.tpl" */ ?>
<?php /*%%SmartyHeaderCode:672849825511bf87907ab57-60888927%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a0081a3897644f881bc8e6b910b0d02691f754f3' => 
    array (
      0 => '/home/firewall/www/vs.profferlabs.com/app/views/vhosts/default/Client/Projects/invite_success.tpl',
      1 => 1360782517,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '672849825511bf87907ab57-60888927',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'name' => 0,
    'emails' => 0,
    'email' => 0,
    'hash' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_511bf8790b60a',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_511bf8790b60a')) {function content_511bf8790b60a($_smarty_tpl) {?>Invitations to project <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 have been sent to the following addresses:<br />
<?php  $_smarty_tpl->tpl_vars['email'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['email']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['emails']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['email']->key => $_smarty_tpl->tpl_vars['email']->value){
$_smarty_tpl->tpl_vars['email']->_loop = true;
?>
	<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
<br />
<?php } ?>
<br />
The invitation code for this project is <?php echo $_smarty_tpl->tpl_vars['hash']->value;?>
.<?php }} ?>