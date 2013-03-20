<?php /*%%SmartyHeaderCode:817876629513ee1f0680156-27543469%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c616941ae7fcca216d8ad1458dd200eaf34029e8' => 
    array (
      0 => '/home/firewall/www/vs.profferlabs.com/app/views/vhosts/default/Client/Albums/edit.tpl',
      1 => 1361222009,
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
  'nocache_hash' => '817876629513ee1f0680156-27543469',
  'variables' => 
  array (
    'album' => 0,
    'media' => 0,
    'thumb' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_513ee1f0775fc',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_513ee1f0775fc')) {function content_513ee1f0775fc($_smarty_tpl) {?><!DOCTYPE html >
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
<script type='text/javascript' src='/get/js/name/Client_Albums_edit'></script>

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

<form method="post">
	<h1 style="color:white; font-size: 18px; margin: 5px; padding: 3px;">Photos</h1>
	<div id="toplong" class="panel">
		
		<div class="toolbarcontainer">
			<ul class="toolbar">
								<li><a href="/albums/upload/id/46629" class="colorbox uibutton" >Upload Media</a></li>
			</ul>
		</div>
		<div class="section albumlist" id="albumlist">
				<div class='row lh11' id="row_46629" style="overflow: hidden;">
											<br clear="all" />
						<div class="thumblist">
							<h3>Media owned by you</h3>
																								<div class="thumbnail_container_owner" id="thumb_226492">
																					<img class="thumb_img" src="/media/photos/thumbs/14_001.jpg" border="0" 
												thumb_list="/media/photos/thumbs/14_001.jpg,"
											/>
																			</div>
																																<div class="thumbnail_container_owner" id="thumb_226469">
																					<img class="thumb_img" src="/media/videos/thumbs/1_001.png" border="0" 
												thumb_list="/media/videos/thumbs/1_001.png,/media/videos/thumbs/1_002.png,/media/videos/thumbs/1_003.png,/media/videos/thumbs/1_004.png,/media/videos/thumbs/1_005.png,"
											/>
																			</div>
																																<div class="thumbnail_container_owner" id="thumb_226475">
																					<img class="thumb_img" src="/media/photos/thumbs/30_001.jpg" border="0" 
												thumb_list="/media/photos/thumbs/30_001.jpg,"
											/>
																			</div>
																																<div class="thumbnail_container_owner" id="thumb_226491">
																					<img class="thumb_img" src="/media/videos/thumbs/3_001.png" border="0" 
												thumb_list="/media/videos/thumbs/3_001.png,/media/videos/thumbs/3_002.png,/media/videos/thumbs/3_003.png,/media/videos/thumbs/3_004.png,/media/videos/thumbs/3_005.png,"
											/>
																			</div>
																																<div class="thumbnail_container_owner" id="thumb_226490">
																					<img class="thumb_img" src="/media/photos/thumbs/12_001.jpg" border="0" 
												thumb_list="/media/photos/thumbs/12_001.jpg,"
											/>
																			</div>
																					</div>
						<br clear="all" />
						<div class="thumblist">
							<h3>Media owned by others</h3>
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