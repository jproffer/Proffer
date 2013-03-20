<?php /* Smarty version Smarty-3.1.7, created on 2013-03-08 21:12:59
		 compiled from "/home/firewall/www/vs.profferlabs.com/app/views/vhosts/default/Client/Storyboards/newstoryboard.tpl" */ ?>
<?php /*%%SmartyHeaderCode:198854434513a545b5779a1-81829962%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '30876ee6ed398b44c2b9fa6824da90b13929bb52' => 
    array (
      0 => '/home/firewall/www/vs.profferlabs.com/app/views/vhosts/default/Client/Storyboards/newstoryboard.tpl',
      1 => 1361909427,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '198854434513a545b5779a1-81829962',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'securityToken' => 0,
    'project_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_513a545b5a529',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_513a545b5a529')) {function content_513a545b5a529($_smarty_tpl) {?><div id="toplong" class="panel">
	<form method='post' autocomplete="on" name='frmNewStoryboard' id='frmNewStoryboard'>
		<?php echo $_smarty_tpl->tpl_vars['securityToken']->value;?>

		<input type='hidden' name='pid' id='pid' value='<?php echo $_smarty_tpl->tpl_vars['project_id']->value;?>
' />
		<div class='section'>
			<div class="row">
				<div class="label">Storyboard Name</div>
				<div class="field w300">
					<input type="text" class="w200" id="aname" name="aname" placeholder="Storyboard Name" />
				</div>
			</div>
			<div class="row">
				<div class="label"></div>
				<div class="field w150">
					<input type="button" name="btnnewstoryboard" id="btnnewstoryboard" value="Create Storyboard" class="ui-button" onclick="checkNewStoryboardForm();" />
				</div>
			</div>
		</div>
	</form>
</div>
<?php }} ?>