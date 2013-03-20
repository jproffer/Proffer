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
    '0cafc79e9443bfda04ed9bdf138a224ea95bce8d' => 
    array (
      0 => '/home/firewall/www/vs.profferlabs.com/app/views/vhosts/default/Client/includes/headerless.tpl',
      1 => 1360784436,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9358778655139c8c96c5f26-70763914',
  'variables' => 
  array (
    'securityToken' => 0,
    'projectid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5139c8c9708be',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5139c8c9708be')) {function content_5139c8c9708be($_smarty_tpl) {?><!DOCTYPE html >
<html>
<head>
	<title>Company Title</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta http-equiv="content-language" content="en" />
	<meta http-equiv="cache-control" content="no-cache" />
	<meta name="robots" content="all,follow" />
	<style type='text/css' media='screen' charset='utf-8'>@import url('/themes/default/inc_000_reset.css?24045995');
@import url('/themes/default/inc_010_jquery.css?506022825');
@import url('/themes/default/inc_030_file-upload.css?3932438815');
@import url('/themes/default/inc_040_file-upload-noscript.css?91114233');
@import url('/cache/css/inc_020_main.css');
@import url('/cache/css/inc_022_albums.css');
@import url('/cache/css/inc_024_storyboard.css');
@import url('/cache/css/inc_050_topmenu.css');
@import url('/themes/default/plugins/colorbox.css?2271957919');
@import url('/themes/default/plugins/fbc.css?252674476');
</style>
	<script type='text/javascript' src='/js/jquery.js?2222371984'></script>
<script type='text/javascript' src='/js/jqueryui.js?3554238949'></script>
<script type='text/javascript' src='/js/plugins/jquery/colorbox.js?1684199692'></script>
<script type='text/javascript' src='/js/plugins/jquery/validate.js?798737007'></script>
<script type='text/javascript' src='/js/plugins/jquery/fbc.js?2069704217'></script>

	<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

</head>
<body>


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
		
		<input type='hidden' name='pid' id='pid' value='77186' />
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