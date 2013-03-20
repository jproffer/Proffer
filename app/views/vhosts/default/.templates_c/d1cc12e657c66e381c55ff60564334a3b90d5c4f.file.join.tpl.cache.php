<?php /* Smarty version Smarty-3.1.7, created on 2013-02-17 07:14:02
		 compiled from "/home/firewall/www/vs.profferlabs.com/app/views/vhosts/default/Client/Projects/join.tpl" */ ?>
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
  ),
  'nocache_hash' => '15726882345120833a500818-04659642',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5120833a52ce8',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5120833a52ce8')) {function content_5120833a52ce8($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("includes/headerless.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

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