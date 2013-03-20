<?php /*%%SmartyHeaderCode:1534272295145028f1c35e5-24742058%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e4caa027790b09cc0aea8dc916c4b757f48dc5f4' => 
    array (
      0 => '/home/firewall/www/vs.profferlabs.com/app/views/vhosts/default/Client/Accounts/dashboard.tpl',
      1 => 1360570617,
      2 => 'file',
    ),
    'd09c536007830edb2f84e199d62a1a1329de7440' => 
    array (
      0 => '/home/firewall/www/vs.profferlabs.com/app/views/vhosts/default/Client/includes/header.tpl',
      1 => 1361909427,
      2 => 'file',
    ),
    'd4ba03b79ba41890529a0cc8978f9a0fd28d2b07' => 
    array (
      0 => '/home/firewall/www/vs.profferlabs.com/app/views/vhosts/default/Client/includes/menu.tpl',
      1 => 1361909427,
      2 => 'file',
    ),
    'e9d4d619f63ed68279681cbdf8b85194d7dfabc1' => 
    array (
      0 => '/home/firewall/www/vs.profferlabs.com/app/views/vhosts/default/Client/includes/footer.tpl',
      1 => 1360038412,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1534272295145028f1c35e5-24742058',
  'variables' => 
  array (
    'projects' => 0,
    'project' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5145028f228d4',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5145028f228d4')) {function content_5145028f228d4($_smarty_tpl) {?><!DOCTYPE html >
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
</style>
	<script type='text/javascript' src='/js/jquery.js?1622415766'></script>
<script type='text/javascript' src='/js/jqueryui.js?3554238949'></script>
<script type='text/javascript' src='/js/touchpunch.js?1356476795'></script>
<script type='text/javascript' src='/js/plugins/jquery/colorbox.js?123472484'></script>
<script type='text/javascript' src='/js/plugins/jquery/validate.js?798737007'></script>
<script type='text/javascript' src='/js/plugins/jquery/zclip/zclip.min.js?891145879'></script>
<script type='text/javascript' src='/get/js/name/Client_Accounts_dashboard'></script>

	<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<script type="text/javascript" src="/js/hoverintent.js"></script>
	<script type="text/javascript" src="/js/Includes/menu.js"></script>
	<script type="text/javascript" src="/js/Includes/Client/menu.js"></script>
	<script type="text/javascript" src="/js/Includes/global.js"></script>

</head>
<body>
<div id="main">
  <div id="header">
	<div style="float:right"> <span style="display:block; padding-top:30px"></span> </div>
	<span style='float: left;'><a href="#"><img id="logo" src="/themes/default/images/logo.png" alt=""  class="border_none" /></a></span>
	<div id="topmenu">
		<div id="smoothmenu" class="ddsmoothmenu">
<ul class="parentmenu">
<li><a href="#">Projects</a>
  <ul class="submenu">
	<li><a href="/projects/join/" class="ajax cboxElement joinproject">Join Project</a></li>
	<li><a href="/projects/new/" class="ajax cboxElement">Create New</a></li>
	<li><a href="/accounts/dashboard/">View/Edit</a></li>
  </ul>
</li>
<li><a href="#">Profile</a>
	<ul class="submenu ui-corner-bottom">
		<li><a href="/accounts/profile/">Edit</a></li>
		<li><a href="/accounts/shipping/">Shipping Info</a></li>
		<li><a href="/accounts/billing/">Billing Info</a></li>
	</ul>
</li>
<li><a href="/auth/logout">Logout</a></li>
</ul>
<br style="clear: left" />
</div>

	</div>
  </div>

<form>
<div id="toplong" class="panel">
	<h3>My Projects</h3>
	<div class='section'>
			<div class="row">
			<div class="label">Project:</div>
			<div class="field w100"><a href='/projects/edit/project/80317'>Boyfriend Captured</a></div>
		</div>
		<div class="row">
			<div class="label">&nbsp;</div>
			<div class="field w250">
				Share: <input type='text' value='8N89IM' READONLY class="w50" />&nbsp;
				<input type="button" value="Copy" class="btnCopy ui-button ui-corner-all" cpyValue="8N89IM" />
			</div>
		</div>
			<div class="row">
			<div class="label">Project:</div>
			<div class="field w100"><a href='/projects/edit/project/90642'>Tales Whispering</a></div>
		</div>
		<div class="row">
			<div class="label">&nbsp;</div>
			<div class="field w250">
				Share: <input type='text' value='WC89K4' READONLY class="w50" />&nbsp;
				<input type="button" value="Copy" class="btnCopy ui-button ui-corner-all" cpyValue="WC89K4" />
			</div>
		</div>
			<div class="row">
			<div class="label">Project:</div>
			<div class="field w100"><a href='/projects/edit/project/92359'>Predator Burning</a></div>
		</div>
		<div class="row">
			<div class="label">&nbsp;</div>
			<div class="field w250">
				Share: <input type='text' value='IVNZ9J' READONLY class="w50" />&nbsp;
				<input type="button" value="Copy" class="btnCopy ui-button ui-corner-all" cpyValue="IVNZ9J" />
			</div>
		</div>
			<div class="row">
			<div class="label">Project:</div>
			<div class="field w100"><a href='/projects/edit/project/96485'>Dreams Sucking</a></div>
		</div>
		<div class="row">
			<div class="label">&nbsp;</div>
			<div class="field w250">
				Share: <input type='text' value='96M8W9' READONLY class="w50" />&nbsp;
				<input type="button" value="Copy" class="btnCopy ui-button ui-corner-all" cpyValue="96M8W9" />
			</div>
		</div>
			<div class="row">
			<div class="label">Project:</div>
			<div class="field w100"><a href='/projects/edit/project/102980'>Valley Which</a></div>
		</div>
		<div class="row">
			<div class="label">&nbsp;</div>
			<div class="field w250">
				Share: <input type='text' value='B1QHSZ' READONLY class="w50" />&nbsp;
				<input type="button" value="Copy" class="btnCopy ui-button ui-corner-all" cpyValue="B1QHSZ" />
			</div>
		</div>
			<div class="row">
			<div class="label">Project:</div>
			<div class="field w100"><a href='/projects/edit/project/103526'>Door Hidden</a></div>
		</div>
		<div class="row">
			<div class="label">&nbsp;</div>
			<div class="field w250">
				Share: <input type='text' value='YGH2XI' READONLY class="w50" />&nbsp;
				<input type="button" value="Copy" class="btnCopy ui-button ui-corner-all" cpyValue="YGH2XI" />
			</div>
		</div>
			<div class="row">
			<div class="label">Project:</div>
			<div class="field w100"><a href='/projects/edit/project/110764'>Year Forgotten</a></div>
		</div>
		<div class="row">
			<div class="label">&nbsp;</div>
			<div class="field w250">
				Share: <input type='text' value='DAQ804' READONLY class="w50" />&nbsp;
				<input type="button" value="Copy" class="btnCopy ui-button ui-corner-all" cpyValue="DAQ804" />
			</div>
		</div>
			<div class="row">
			<div class="label">Project:</div>
			<div class="field w100"><a href='/projects/edit/project/110903'>Touch Shadowy</a></div>
		</div>
		<div class="row">
			<div class="label">&nbsp;</div>
			<div class="field w250">
				Share: <input type='text' value='Z2Y830' READONLY class="w50" />&nbsp;
				<input type="button" value="Copy" class="btnCopy ui-button ui-corner-all" cpyValue="Z2Y830" />
			</div>
		</div>
			<div class="row">
			<div class="label">Project:</div>
			<div class="field w100"><a href='/projects/edit/project/115064'>Thorn Hot</a></div>
		</div>
		<div class="row">
			<div class="label">&nbsp;</div>
			<div class="field w250">
				Share: <input type='text' value='VWIVJX' READONLY class="w50" />&nbsp;
				<input type="button" value="Copy" class="btnCopy ui-button ui-corner-all" cpyValue="VWIVJX" />
			</div>
		</div>
			<div class="row">
			<div class="label">Project:</div>
			<div class="field w100"><a href='/projects/edit/project/116252'>Servants Purple</a></div>
		</div>
		<div class="row">
			<div class="label">&nbsp;</div>
			<div class="field w250">
				Share: <input type='text' value='2P7B36' READONLY class="w50" />&nbsp;
				<input type="button" value="Copy" class="btnCopy ui-button ui-corner-all" cpyValue="2P7B36" />
			</div>
		</div>
			<div class="row">
			<div class="label">Project:</div>
			<div class="field w100"><a href='/projects/edit/project/119180'>Misty Emerald</a></div>
		</div>
		<div class="row">
			<div class="label">&nbsp;</div>
			<div class="field w250">
				Share: <input type='text' value='9SAMCT' READONLY class="w50" />&nbsp;
				<input type="button" value="Copy" class="btnCopy ui-button ui-corner-all" cpyValue="9SAMCT" />
			</div>
		</div>
			<div class="row">
			<div class="label">Project:</div>
			<div class="field w100"><a href='/projects/edit/project/119571'>Thief Willing</a></div>
		</div>
		<div class="row">
			<div class="label">&nbsp;</div>
			<div class="field w250">
				Share: <input type='text' value='U3CLVN' READONLY class="w50" />&nbsp;
				<input type="button" value="Copy" class="btnCopy ui-button ui-corner-all" cpyValue="U3CLVN" />
			</div>
		</div>
			<div class="row">
			<div class="label">Project:</div>
			<div class="field w100"><a href='/projects/edit/project/77186'>Rings Cracked</a></div>
		</div>
		<div class="row">
			<div class="label">&nbsp;</div>
			<div class="field w250">
				Share: <input type='text' value='72IH05' READONLY class="w50" />&nbsp;
				<input type="button" value="Copy" class="btnCopy ui-button ui-corner-all" cpyValue="72IH05" />
			</div>
		</div>
			<div class="row">
			<div class="label">Project:</div>
			<div class="field w100"><a href='/projects/edit/project/127187'>Theft Broken</a></div>
		</div>
		<div class="row">
			<div class="label">&nbsp;</div>
			<div class="field w250">
				Share: <input type='text' value='QXHRIP' READONLY class="w50" />&nbsp;
				<input type="button" value="Copy" class="btnCopy ui-button ui-corner-all" cpyValue="QXHRIP" />
			</div>
		</div>
		</div>
</div>
</form>
<div id="footer">
  <div >Copyright (c) 2013 Storymix Media</div>
</div>

	<script type='text/javascript'>
/**
 * A very (VERY) Quick JavaScript method to
 * remove LastPass elements from the screen
 * 
 * Written by Roger Thomas (http://www.rogerethomas.com)
 */
function bustLastpass()
{
        var badLastpass = ["lptopspacer","lpiframeoverlay"];
        var divs = document.getElementsByTagName("div");
        for (var i = 0; i < divs.length; i++) {
                if (typeof divs[i] != "undefined") {
                        var divThis = divs[i];
                        var divId = divThis.id;
                        if (typeof divId != "undefined" && divId != "") {
                                for (var aI = 0; aI < badLastpass.length; aI++) {
                                    var thisTest = badLastpass[aI];
                                    var thisLength = thisTest.length;
                                    if (divId.substring(0,thisLength) == thisTest) {
                                        var element = document.getElementById(divId);
                                        element.parentNode.removeChild(element);
                                    }
                                }
                        }
                }
        }

        return setTimeout(function(){bustLastpass();},10);

}
setTimeout(function(){bustLastpass();},10);	
</script>

</body>
</html>
<?php }} ?>