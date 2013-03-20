<?php /* Smarty version Smarty-3.1.7, created on 2013-03-08 11:17:29
		 compiled from "/home/firewall/www/vs.profferlabs.com/app/views/vhosts/default/Client/Projects/invite.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9358778655139c8c96c5f26-70763914%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9fcbcf67f7db8ff4abb9924d4ccde0c3df9aad5e' => 
    array (
      0 => '/home/firewall/www/vs.profferlabs.com/app/views/vhosts/default/Client/Projects/invite.tpl',
      1 => 1360782887,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9358778655139c8c96c5f26-70763914',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'securityToken' => 0,
    'projectid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5139c8c96fa5f',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5139c8c96fa5f')) {function content_5139c8c96fa5f($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("includes/headerless.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


	<script type='text/javascript'>
		$(document).ready(function() {
			$('#invitenames').tokenInput("/remote/FindUserFromProject", {
				theme: "facebook",
				minChars: 3,
				preventDuplicates: true,
				method: 'POST'
			});	
			$("#btnnewinvite").live('click', function() {
				var projectID = $("#pid").val();
				var data = $('#frmInvite').serialize();
				$('#error').html("");
				$.ajax({
					url: "/remote/sendinvites/id/"+projectID,
					type: 'post',
					dataType: 'json',
					data: data,
					success: function(res) {
						if (res.status == "1") {
							$("#toplong").html(res.nhtml);
						} else {
							$("#error").html(res.msg);
						}
					}
				});
			});
		});
	</script>

<div id="toplong" class="panel" style="width: 600px;">
	<div id='error' style='color: red; font-weight: bold;'></div>
	<form method='post' autocomplete="on" name='frmInvite' id='frmInvite'>
		<?php echo $_smarty_tpl->tpl_vars['securityToken']->value;?>

		<input type='hidden' name='pid' id='pid' value='<?php echo $_smarty_tpl->tpl_vars['projectid']->value;?>
' />
		<div class='section'>
			<div class="row">
				<div class="label">Name(s) to invite</div>
				<div class="field w150">
					<input type="text" class="w100" id="invitenames" name="invitenames" />
				</div>
			</div>
			<div class="row">
				<div class="label"></div>
				<div class="field w150">
					<input type="button" name="btnnewinvite" id="btnnewinvite" value="Send Invitations" class="ui-button" />
				</div>
			</div>
		</div>
	</form>
</div>
</body>
</html><?php }} ?>