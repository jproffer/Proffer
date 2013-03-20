<?php /*%%SmartyHeaderCode:937357669513904dc094982-21919810%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '66820c35a121c6212589f2328a95e83f1bde1a0d' => 
    array (
      0 => '/home/firewall/www/vs.profferlabs.com/app/views/vhosts/default/Client/Projects/new.tpl',
      1 => 1360171441,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '937357669513904dc094982-21919810',
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_513904dc0b91f',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_513904dc0b91f')) {function content_513904dc0b91f($_smarty_tpl) {?><div id="toplong" class="panel">
	<form method='post' autocomplete="on" name='frmNewProject' id='frmNewProject'>
		<div class='section'>
			<div class="row">
				<div class="label">Project Name</div>
				<div class="field w300">
					<input class="w200" id="name" id="name" type="text" placeholder="ProjectName" />
				</div>
			</div>
			<div class="row">
				<div class="label"></div>
				<div class="field w150">
					<input type="button" name="btnnewproject" id="btnnewproject" value="Create Project" class="ui-button" onclick="checkNewProjectForm();" />
				</div>
			</div>
		</div>
	</form>
</div>
<?php }} ?>