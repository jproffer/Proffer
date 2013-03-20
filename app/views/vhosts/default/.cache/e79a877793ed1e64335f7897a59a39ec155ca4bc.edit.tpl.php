<?php /*%%SmartyHeaderCode:17856360015143796bc3a386-08523413%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e79a877793ed1e64335f7897a59a39ec155ca4bc' => 
    array (
      0 => '/home/firewall/www/vs.profferlabs.com/app/views/vhosts/default/Client/Projects/edit.tpl',
      1 => 1362972821,
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
  'nocache_hash' => '17856360015143796bc3a386-08523413',
  'variables' => 
  array (
    'securitytoken' => 0,
    'project' => 0,
    'unsorted' => 0,
    'media' => 0,
    'thumb' => 0,
    'albums' => 0,
    'album' => 0,
    'storyboards' => 0,
    'storyboard' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5143796bdbe92',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5143796bdbe92')) {function content_5143796bdbe92($_smarty_tpl) {?><!DOCTYPE html >
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
@import url('/themes/default/plugins/fbc.css?252674476');
@import url('/themes/default/plugins/colorbox.css?2271957919');
</style>
	<script type='text/javascript' src='/js/jquery.js?1622415766'></script>
<script type='text/javascript' src='/js/jqueryui.js?3554238949'></script>
<script type='text/javascript' src='/js/touchpunch.js?1356476795'></script>
<script type='text/javascript' src='/js/plugins/jquery/migrate.js?3105805455'></script>
<script type='text/javascript' src='/js/plugins/jquery/validate.js?798737007'></script>
<script type='text/javascript' src='/js/plugins/jquery/fbc.js?2069704217'></script>
<script type='text/javascript' src='/js/plugins/jquery/colorbox.js?123472484'></script>
<script type='text/javascript' src='/get/js/name/Client_Projects_edit'></script>

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
	
	<h1 style="color:white; font-size: 21px; margin: 5px; padding: 3px;">Rings Cracked</h1>
	<div id="toplong" class="fl panel" style="width: 48%;">
		<h2 style="color:white; font-size: 18px; margin: 5px; padding: 3px;">Media &amp; Albums</h2>
		<div class="toolbarcontainer">
			<ul class="toolbar">
				<li><a href="/projects/invite/id/77186" class="colorbox uibutton invitebutton" >Invite Users</a></li>
				<li><a href="/projects/newalbum/id/77186" class="colorbox uibutton" >Create Album</a></li>
				<li><a href="/projects/upload/id/77186" class="colorbox-iframe uibutton" >Upload Media</a></li>
			</ul>
		</div>
		<div class="section albumlist" id="albumlist">
			<div class='row lh11' style="overflow: hidden;">
				<h3 class="title">Available Media</h3>
				<div class="unsorted_thumblist _thumbcontainer" albumid="">
									</div>
			</div>
			<h3 class="title">Albums</h3>
							<div class='row lh11' id="row_46629" style="overflow: hidden;">
					<div class="w50">46629</div>
					<div class="w200"><a href='/albums/edit/id/46629/'>Photos</a></div>
					<div class="w50">
											</div>
					<br clear="all" />
					<div class="thumblist _thumbcontainer" albumid="46629">
																				<div
									class="thumbObject thumbnail_container_owner" 
									id="thumb_226492"
									media_id="226492" 
									album_id="46629"
									project_id="77186"
								>
																			<img class="thumb_img" src="/media/photos/thumbs/14_001.jpg" border="0" 
											thumb_list="/media/photos/thumbs/14_001.jpg,"
										/>
																		<div class="menu" id="menu_226492">
										<ul class="fr">
											<li class="ui-state-default ui-corner-all btnDeleteMediaFromAlbum"><span class="ui-icon ui-icon-closethick">&nbsp;</span></li>
										</ul>
									</div>
									
								</div>
															<div
									class="thumbObject thumbnail_container_owner" 
									id="thumb_226469"
									media_id="226469" 
									album_id="46629"
									project_id="77186"
								>
																			<img class="thumb_img" src="/media/videos/thumbs/1_001.png" border="0" 
											thumb_list="/media/videos/thumbs/1_001.png,/media/videos/thumbs/1_002.png,/media/videos/thumbs/1_003.png,/media/videos/thumbs/1_004.png,/media/videos/thumbs/1_005.png,"
										/>
																		<div class="menu" id="menu_226469">
										<ul class="fr">
											<li class="ui-state-default ui-corner-all btnDeleteMediaFromAlbum"><span class="ui-icon ui-icon-closethick">&nbsp;</span></li>
										</ul>
									</div>
									
								</div>
															<div
									class="thumbObject thumbnail_container_owner" 
									id="thumb_226475"
									media_id="226475" 
									album_id="46629"
									project_id="77186"
								>
																			<img class="thumb_img" src="/media/photos/thumbs/30_001.jpg" border="0" 
											thumb_list="/media/photos/thumbs/30_001.jpg,"
										/>
																		<div class="menu" id="menu_226475">
										<ul class="fr">
											<li class="ui-state-default ui-corner-all btnDeleteMediaFromAlbum"><span class="ui-icon ui-icon-closethick">&nbsp;</span></li>
										</ul>
									</div>
									
								</div>
															<div
									class="thumbObject thumbnail_container_owner" 
									id="thumb_226491"
									media_id="226491" 
									album_id="46629"
									project_id="77186"
								>
																			<img class="thumb_img" src="/media/videos/thumbs/3_001.png" border="0" 
											thumb_list="/media/videos/thumbs/3_001.png,/media/videos/thumbs/3_002.png,/media/videos/thumbs/3_003.png,/media/videos/thumbs/3_004.png,/media/videos/thumbs/3_005.png,"
										/>
																		<div class="menu" id="menu_226491">
										<ul class="fr">
											<li class="ui-state-default ui-corner-all btnDeleteMediaFromAlbum"><span class="ui-icon ui-icon-closethick">&nbsp;</span></li>
										</ul>
									</div>
									
								</div>
															<div
									class="thumbObject thumbnail_container_owner" 
									id="thumb_226490"
									media_id="226490" 
									album_id="46629"
									project_id="77186"
								>
																			<img class="thumb_img" src="/media/photos/thumbs/12_001.jpg" border="0" 
											thumb_list="/media/photos/thumbs/12_001.jpg,"
										/>
																		<div class="menu" id="menu_226490">
										<ul class="fr">
											<li class="ui-state-default ui-corner-all btnDeleteMediaFromAlbum"><span class="ui-icon ui-icon-closethick">&nbsp;</span></li>
										</ul>
									</div>
									
								</div>
																	</div>
				</div>
							<div class='row lh11' id="row_46630" style="overflow: hidden;">
					<div class="w50">46630</div>
					<div class="w200"><a href='/albums/edit/id/46630/'>Videos</a></div>
					<div class="w50">
											</div>
					<br clear="all" />
					<div class="thumblist _thumbcontainer" albumid="46630">
																				<div
									class="thumbObject thumbnail_container_owner" 
									id="thumb_226475"
									media_id="226475" 
									album_id="46630"
									project_id="77186"
								>
																			<img class="thumb_img" src="/media/photos/thumbs/30_001.jpg" border="0" 
											thumb_list="/media/photos/thumbs/30_001.jpg,"
										/>
																		<div class="menu" id="menu_226475">
										<ul class="fr">
											<li class="ui-state-default ui-corner-all btnDeleteMediaFromAlbum"><span class="ui-icon ui-icon-closethick">&nbsp;</span></li>
										</ul>
									</div>
									
								</div>
															<div
									class="thumbObject thumbnail_container_owner" 
									id="thumb_226479"
									media_id="226479" 
									album_id="46630"
									project_id="77186"
								>
																			<img class="thumb_img" src="/media/videos/thumbs/27_001.png" border="0" 
											thumb_list="/media/videos/thumbs/27_001.png,/media/videos/thumbs/27_002.png,/media/videos/thumbs/27_003.png,/media/videos/thumbs/27_004.png,/media/videos/thumbs/27_005.png,"
										/>
																		<div class="menu" id="menu_226479">
										<ul class="fr">
											<li class="ui-state-default ui-corner-all btnDeleteMediaFromAlbum"><span class="ui-icon ui-icon-closethick">&nbsp;</span></li>
										</ul>
									</div>
									
								</div>
															<div
									class="thumbObject thumbnail_container_owner" 
									id="thumb_226490"
									media_id="226490" 
									album_id="46630"
									project_id="77186"
								>
																			<img class="thumb_img" src="/media/photos/thumbs/12_001.jpg" border="0" 
											thumb_list="/media/photos/thumbs/12_001.jpg,"
										/>
																		<div class="menu" id="menu_226490">
										<ul class="fr">
											<li class="ui-state-default ui-corner-all btnDeleteMediaFromAlbum"><span class="ui-icon ui-icon-closethick">&nbsp;</span></li>
										</ul>
									</div>
									
								</div>
															<div
									class="thumbObject thumbnail_container_owner" 
									id="thumb_226487"
									media_id="226487" 
									album_id="46630"
									project_id="77186"
								>
																			<img class="thumb_img" src="/media/photos/thumbs/21_001.jpg" border="0" 
											thumb_list="/media/photos/thumbs/21_001.jpg,"
										/>
																		<div class="menu" id="menu_226487">
										<ul class="fr">
											<li class="ui-state-default ui-corner-all btnDeleteMediaFromAlbum"><span class="ui-icon ui-icon-closethick">&nbsp;</span></li>
										</ul>
									</div>
									
								</div>
															<div
									class="thumbObject thumbnail_container_owner" 
									id="thumb_226480"
									media_id="226480" 
									album_id="46630"
									project_id="77186"
								>
																			<img class="thumb_img" src="/media/videos/thumbs/13_001.png" border="0" 
											thumb_list="/media/videos/thumbs/13_001.png,/media/videos/thumbs/13_002.png,/media/videos/thumbs/13_003.png,/media/videos/thumbs/13_004.png,/media/videos/thumbs/13_005.png,"
										/>
																		<div class="menu" id="menu_226480">
										<ul class="fr">
											<li class="ui-state-default ui-corner-all btnDeleteMediaFromAlbum"><span class="ui-icon ui-icon-closethick">&nbsp;</span></li>
										</ul>
									</div>
									
								</div>
															<div
									class="thumbObject thumbnail_container_owner" 
									id="thumb_226484"
									media_id="226484" 
									album_id="46630"
									project_id="77186"
								>
																			<img class="thumb_img" src="/media/videos/thumbs/21_001.png" border="0" 
											thumb_list="/media/videos/thumbs/21_001.png,/media/videos/thumbs/21_002.png,/media/videos/thumbs/21_003.png,/media/videos/thumbs/21_004.png,/media/videos/thumbs/21_005.png,"
										/>
																		<div class="menu" id="menu_226484">
										<ul class="fr">
											<li class="ui-state-default ui-corner-all btnDeleteMediaFromAlbum"><span class="ui-icon ui-icon-closethick">&nbsp;</span></li>
										</ul>
									</div>
									
								</div>
															<div
									class="thumbObject thumbnail_container_owner" 
									id="thumb_226496"
									media_id="226496" 
									album_id="46630"
									project_id="77186"
								>
																			<img class="thumb_img" src="/media/videos/thumbs/7_001.png" border="0" 
											thumb_list="/media/videos/thumbs/7_001.png,/media/videos/thumbs/7_002.png,/media/videos/thumbs/7_003.png,/media/videos/thumbs/7_004.png,/media/videos/thumbs/7_005.png,"
										/>
																		<div class="menu" id="menu_226496">
										<ul class="fr">
											<li class="ui-state-default ui-corner-all btnDeleteMediaFromAlbum"><span class="ui-icon ui-icon-closethick">&nbsp;</span></li>
										</ul>
									</div>
									
								</div>
															<div
									class="thumbObject thumbnail_container_owner" 
									id="thumb_226472"
									media_id="226472" 
									album_id="46630"
									project_id="77186"
								>
																			<img class="thumb_img" src="/media/videos/thumbs/10_001.png" border="0" 
											thumb_list="/media/videos/thumbs/10_001.png,/media/videos/thumbs/10_002.png,/media/videos/thumbs/10_003.png,/media/videos/thumbs/10_004.png,/media/videos/thumbs/10_005.png,"
										/>
																		<div class="menu" id="menu_226472">
										<ul class="fr">
											<li class="ui-state-default ui-corner-all btnDeleteMediaFromAlbum"><span class="ui-icon ui-icon-closethick">&nbsp;</span></li>
										</ul>
									</div>
									
								</div>
															<div
									class="thumbObject thumbnail_container_owner" 
									id="thumb_226483"
									media_id="226483" 
									album_id="46630"
									project_id="77186"
								>
																			<img class="thumb_img" src="/media/videos/thumbs/14_001.png" border="0" 
											thumb_list="/media/videos/thumbs/14_001.png,/media/videos/thumbs/14_002.png,/media/videos/thumbs/14_003.png,/media/videos/thumbs/14_004.png,/media/videos/thumbs/14_005.png,"
										/>
																		<div class="menu" id="menu_226483">
										<ul class="fr">
											<li class="ui-state-default ui-corner-all btnDeleteMediaFromAlbum"><span class="ui-icon ui-icon-closethick">&nbsp;</span></li>
										</ul>
									</div>
									
								</div>
															<div
									class="thumbObject thumbnail_container_owner" 
									id="thumb_226485"
									media_id="226485" 
									album_id="46630"
									project_id="77186"
								>
																			<img class="thumb_img" src="/media/videos/thumbs/8_001.png" border="0" 
											thumb_list="/media/videos/thumbs/8_001.png,/media/videos/thumbs/8_002.png,/media/videos/thumbs/8_003.png,/media/videos/thumbs/8_004.png,/media/videos/thumbs/8_005.png,"
										/>
																		<div class="menu" id="menu_226485">
										<ul class="fr">
											<li class="ui-state-default ui-corner-all btnDeleteMediaFromAlbum"><span class="ui-icon ui-icon-closethick">&nbsp;</span></li>
										</ul>
									</div>
									
								</div>
															<div
									class="thumbObject thumbnail_container_owner" 
									id="thumb_226468"
									media_id="226468" 
									album_id="46630"
									project_id="77186"
								>
																			<img class="thumb_img" src="/media/videos/thumbs/9_001.png" border="0" 
											thumb_list="/media/videos/thumbs/9_001.png,/media/videos/thumbs/9_002.png,/media/videos/thumbs/9_003.png,/media/videos/thumbs/9_004.png,/media/videos/thumbs/9_005.png,"
										/>
																		<div class="menu" id="menu_226468">
										<ul class="fr">
											<li class="ui-state-default ui-corner-all btnDeleteMediaFromAlbum"><span class="ui-icon ui-icon-closethick">&nbsp;</span></li>
										</ul>
									</div>
									
								</div>
															<div
									class="thumbObject thumbnail_container_owner" 
									id="thumb_226493"
									media_id="226493" 
									album_id="46630"
									project_id="77186"
								>
																			<img class="thumb_img" src="/media/videos/thumbs/12_001.png" border="0" 
											thumb_list="/media/videos/thumbs/12_001.png,/media/videos/thumbs/12_002.png,/media/videos/thumbs/12_003.png,/media/videos/thumbs/12_004.png,/media/videos/thumbs/12_005.png,"
										/>
																		<div class="menu" id="menu_226493">
										<ul class="fr">
											<li class="ui-state-default ui-corner-all btnDeleteMediaFromAlbum"><span class="ui-icon ui-icon-closethick">&nbsp;</span></li>
										</ul>
									</div>
									
								</div>
															<div
									class="thumbObject thumbnail_container_owner" 
									id="thumb_226476"
									media_id="226476" 
									album_id="46630"
									project_id="77186"
								>
																			<img class="thumb_img" src="/media/photos/thumbs/10_001.jpg" border="0" 
											thumb_list="/media/photos/thumbs/10_001.jpg,"
										/>
																		<div class="menu" id="menu_226476">
										<ul class="fr">
											<li class="ui-state-default ui-corner-all btnDeleteMediaFromAlbum"><span class="ui-icon ui-icon-closethick">&nbsp;</span></li>
										</ul>
									</div>
									
								</div>
															<div
									class="thumbObject thumbnail_container_owner" 
									id="thumb_226482"
									media_id="226482" 
									album_id="46630"
									project_id="77186"
								>
																			<img class="thumb_img" src="/media/photos/thumbs/1_001.jpg" border="0" 
											thumb_list="/media/photos/thumbs/1_001.jpg,"
										/>
																		<div class="menu" id="menu_226482">
										<ul class="fr">
											<li class="ui-state-default ui-corner-all btnDeleteMediaFromAlbum"><span class="ui-icon ui-icon-closethick">&nbsp;</span></li>
										</ul>
									</div>
									
								</div>
															<div
									class="thumbObject thumbnail_container_owner" 
									id="thumb_226489"
									media_id="226489" 
									album_id="46630"
									project_id="77186"
								>
																			<img class="thumb_img" src="/media/photos/thumbs/29_001.jpg" border="0" 
											thumb_list="/media/photos/thumbs/29_001.jpg,"
										/>
																		<div class="menu" id="menu_226489">
										<ul class="fr">
											<li class="ui-state-default ui-corner-all btnDeleteMediaFromAlbum"><span class="ui-icon ui-icon-closethick">&nbsp;</span></li>
										</ul>
									</div>
									
								</div>
															<div
									class="thumbObject thumbnail_container_owner" 
									id="thumb_226474"
									media_id="226474" 
									album_id="46630"
									project_id="77186"
								>
																			<img class="thumb_img" src="/media/photos/thumbs/15_001.jpg" border="0" 
											thumb_list="/media/photos/thumbs/15_001.jpg,"
										/>
																		<div class="menu" id="menu_226474">
										<ul class="fr">
											<li class="ui-state-default ui-corner-all btnDeleteMediaFromAlbum"><span class="ui-icon ui-icon-closethick">&nbsp;</span></li>
										</ul>
									</div>
									
								</div>
															<div
									class="thumbObject thumbnail_container_owner" 
									id="thumb_226481"
									media_id="226481" 
									album_id="46630"
									project_id="77186"
								>
																			<img class="thumb_img" src="/media/videos/thumbs/23_001.png" border="0" 
											thumb_list="/media/videos/thumbs/23_001.png,/media/videos/thumbs/23_002.png,/media/videos/thumbs/23_003.png,/media/videos/thumbs/23_004.png,/media/videos/thumbs/23_005.png,"
										/>
																		<div class="menu" id="menu_226481">
										<ul class="fr">
											<li class="ui-state-default ui-corner-all btnDeleteMediaFromAlbum"><span class="ui-icon ui-icon-closethick">&nbsp;</span></li>
										</ul>
									</div>
									
								</div>
															<div
									class="thumbObject thumbnail_container_owner" 
									id="thumb_226491"
									media_id="226491" 
									album_id="46630"
									project_id="77186"
								>
																			<img class="thumb_img" src="/media/videos/thumbs/3_001.png" border="0" 
											thumb_list="/media/videos/thumbs/3_001.png,/media/videos/thumbs/3_002.png,/media/videos/thumbs/3_003.png,/media/videos/thumbs/3_004.png,/media/videos/thumbs/3_005.png,"
										/>
																		<div class="menu" id="menu_226491">
										<ul class="fr">
											<li class="ui-state-default ui-corner-all btnDeleteMediaFromAlbum"><span class="ui-icon ui-icon-closethick">&nbsp;</span></li>
										</ul>
									</div>
									
								</div>
															<div
									class="thumbObject thumbnail_container_owner" 
									id="thumb_226470"
									media_id="226470" 
									album_id="46630"
									project_id="77186"
								>
																			<img class="thumb_img" src="/media/videos/thumbs/24_001.png" border="0" 
											thumb_list="/media/videos/thumbs/24_001.png,/media/videos/thumbs/24_002.png,/media/videos/thumbs/24_003.png,/media/videos/thumbs/24_004.png,/media/videos/thumbs/24_005.png,"
										/>
																		<div class="menu" id="menu_226470">
										<ul class="fr">
											<li class="ui-state-default ui-corner-all btnDeleteMediaFromAlbum"><span class="ui-icon ui-icon-closethick">&nbsp;</span></li>
										</ul>
									</div>
									
								</div>
															<div
									class="thumbObject thumbnail_container_owner" 
									id="thumb_226471"
									media_id="226471" 
									album_id="46630"
									project_id="77186"
								>
																			<img class="thumb_img" src="/media/photos/thumbs/13_001.jpg" border="0" 
											thumb_list="/media/photos/thumbs/13_001.jpg,"
										/>
																		<div class="menu" id="menu_226471">
										<ul class="fr">
											<li class="ui-state-default ui-corner-all btnDeleteMediaFromAlbum"><span class="ui-icon ui-icon-closethick">&nbsp;</span></li>
										</ul>
									</div>
									
								</div>
															<div
									class="thumbObject thumbnail_container_owner" 
									id="thumb_226488"
									media_id="226488" 
									album_id="46630"
									project_id="77186"
								>
																			<img class="thumb_img" src="/media/photos/thumbs/23_001.jpg" border="0" 
											thumb_list="/media/photos/thumbs/23_001.jpg,"
										/>
																		<div class="menu" id="menu_226488">
										<ul class="fr">
											<li class="ui-state-default ui-corner-all btnDeleteMediaFromAlbum"><span class="ui-icon ui-icon-closethick">&nbsp;</span></li>
										</ul>
									</div>
									
								</div>
															<div
									class="thumbObject thumbnail_container_owner" 
									id="thumb_226469"
									media_id="226469" 
									album_id="46630"
									project_id="77186"
								>
																			<img class="thumb_img" src="/media/videos/thumbs/1_001.png" border="0" 
											thumb_list="/media/videos/thumbs/1_001.png,/media/videos/thumbs/1_002.png,/media/videos/thumbs/1_003.png,/media/videos/thumbs/1_004.png,/media/videos/thumbs/1_005.png,"
										/>
																		<div class="menu" id="menu_226469">
										<ul class="fr">
											<li class="ui-state-default ui-corner-all btnDeleteMediaFromAlbum"><span class="ui-icon ui-icon-closethick">&nbsp;</span></li>
										</ul>
									</div>
									
								</div>
															<div
									class="thumbObject thumbnail_container_owner" 
									id="thumb_226497"
									media_id="226497" 
									album_id="46630"
									project_id="77186"
								>
																			<img class="thumb_img" src="/media/photos/thumbs/2_001.jpg" border="0" 
											thumb_list="/media/photos/thumbs/2_001.jpg,"
										/>
																		<div class="menu" id="menu_226497">
										<ul class="fr">
											<li class="ui-state-default ui-corner-all btnDeleteMediaFromAlbum"><span class="ui-icon ui-icon-closethick">&nbsp;</span></li>
										</ul>
									</div>
									
								</div>
															<div
									class="thumbObject thumbnail_container_owner" 
									id="thumb_226467"
									media_id="226467" 
									album_id="46630"
									project_id="77186"
								>
																			<img class="thumb_img" src="/media/photos/thumbs/4_001.jpg" border="0" 
											thumb_list="/media/photos/thumbs/4_001.jpg,"
										/>
																		<div class="menu" id="menu_226467">
										<ul class="fr">
											<li class="ui-state-default ui-corner-all btnDeleteMediaFromAlbum"><span class="ui-icon ui-icon-closethick">&nbsp;</span></li>
										</ul>
									</div>
									
								</div>
																	</div>
				</div>
							<div class='row lh11' id="row_46631" style="overflow: hidden;">
					<div class="w50">46631</div>
					<div class="w200"><a href='/albums/edit/id/46631/'>Spirits Obsessed</a></div>
					<div class="w50">
													<button id="btn_46631" class="uibutton deleteAlbum" albumid="46631" icon-type="ui-icon-closethick" ></button>
											</div>
					<br clear="all" />
					<div class="thumblist _thumbcontainer" albumid="46631">
																				<div
									class="thumbObject thumbnail_container_owner" 
									id="thumb_226480"
									media_id="226480" 
									album_id="46631"
									project_id="77186"
								>
																			<img class="thumb_img" src="/media/videos/thumbs/13_001.png" border="0" 
											thumb_list="/media/videos/thumbs/13_001.png,/media/videos/thumbs/13_002.png,/media/videos/thumbs/13_003.png,/media/videos/thumbs/13_004.png,/media/videos/thumbs/13_005.png,"
										/>
																		<div class="menu" id="menu_226480">
										<ul class="fr">
											<li class="ui-state-default ui-corner-all btnDeleteMediaFromAlbum"><span class="ui-icon ui-icon-closethick">&nbsp;</span></li>
										</ul>
									</div>
									
								</div>
															<div
									class="thumbObject thumbnail_container_owner" 
									id="thumb_226478"
									media_id="226478" 
									album_id="46631"
									project_id="77186"
								>
																			<img class="thumb_img" src="/media/photos/thumbs/27_001.jpg" border="0" 
											thumb_list="/media/photos/thumbs/27_001.jpg,"
										/>
																		<div class="menu" id="menu_226478">
										<ul class="fr">
											<li class="ui-state-default ui-corner-all btnDeleteMediaFromAlbum"><span class="ui-icon ui-icon-closethick">&nbsp;</span></li>
										</ul>
									</div>
									
								</div>
															<div
									class="thumbObject thumbnail_container_owner" 
									id="thumb_226482"
									media_id="226482" 
									album_id="46631"
									project_id="77186"
								>
																			<img class="thumb_img" src="/media/photos/thumbs/1_001.jpg" border="0" 
											thumb_list="/media/photos/thumbs/1_001.jpg,"
										/>
																		<div class="menu" id="menu_226482">
										<ul class="fr">
											<li class="ui-state-default ui-corner-all btnDeleteMediaFromAlbum"><span class="ui-icon ui-icon-closethick">&nbsp;</span></li>
										</ul>
									</div>
									
								</div>
															<div
									class="thumbObject thumbnail_container_owner" 
									id="thumb_226467"
									media_id="226467" 
									album_id="46631"
									project_id="77186"
								>
																			<img class="thumb_img" src="/media/photos/thumbs/4_001.jpg" border="0" 
											thumb_list="/media/photos/thumbs/4_001.jpg,"
										/>
																		<div class="menu" id="menu_226467">
										<ul class="fr">
											<li class="ui-state-default ui-corner-all btnDeleteMediaFromAlbum"><span class="ui-icon ui-icon-closethick">&nbsp;</span></li>
										</ul>
									</div>
									
								</div>
															<div
									class="thumbObject thumbnail_container_owner" 
									id="thumb_226491"
									media_id="226491" 
									album_id="46631"
									project_id="77186"
								>
																			<img class="thumb_img" src="/media/videos/thumbs/3_001.png" border="0" 
											thumb_list="/media/videos/thumbs/3_001.png,/media/videos/thumbs/3_002.png,/media/videos/thumbs/3_003.png,/media/videos/thumbs/3_004.png,/media/videos/thumbs/3_005.png,"
										/>
																		<div class="menu" id="menu_226491">
										<ul class="fr">
											<li class="ui-state-default ui-corner-all btnDeleteMediaFromAlbum"><span class="ui-icon ui-icon-closethick">&nbsp;</span></li>
										</ul>
									</div>
									
								</div>
															<div
									class="thumbObject thumbnail_container_owner" 
									id="thumb_226472"
									media_id="226472" 
									album_id="46631"
									project_id="77186"
								>
																			<img class="thumb_img" src="/media/videos/thumbs/10_001.png" border="0" 
											thumb_list="/media/videos/thumbs/10_001.png,/media/videos/thumbs/10_002.png,/media/videos/thumbs/10_003.png,/media/videos/thumbs/10_004.png,/media/videos/thumbs/10_005.png,"
										/>
																		<div class="menu" id="menu_226472">
										<ul class="fr">
											<li class="ui-state-default ui-corner-all btnDeleteMediaFromAlbum"><span class="ui-icon ui-icon-closethick">&nbsp;</span></li>
										</ul>
									</div>
									
								</div>
															<div
									class="thumbObject thumbnail_container_owner" 
									id="thumb_226473"
									media_id="226473" 
									album_id="46631"
									project_id="77186"
								>
																			<img class="thumb_img" src="/media/photos/thumbs/26_001.jpg" border="0" 
											thumb_list="/media/photos/thumbs/26_001.jpg,"
										/>
																		<div class="menu" id="menu_226473">
										<ul class="fr">
											<li class="ui-state-default ui-corner-all btnDeleteMediaFromAlbum"><span class="ui-icon ui-icon-closethick">&nbsp;</span></li>
										</ul>
									</div>
									
								</div>
															<div
									class="thumbObject thumbnail_container_owner" 
									id="thumb_226474"
									media_id="226474" 
									album_id="46631"
									project_id="77186"
								>
																			<img class="thumb_img" src="/media/photos/thumbs/15_001.jpg" border="0" 
											thumb_list="/media/photos/thumbs/15_001.jpg,"
										/>
																		<div class="menu" id="menu_226474">
										<ul class="fr">
											<li class="ui-state-default ui-corner-all btnDeleteMediaFromAlbum"><span class="ui-icon ui-icon-closethick">&nbsp;</span></li>
										</ul>
									</div>
									
								</div>
															<div
									class="thumbObject thumbnail_container_owner" 
									id="thumb_226496"
									media_id="226496" 
									album_id="46631"
									project_id="77186"
								>
																			<img class="thumb_img" src="/media/videos/thumbs/7_001.png" border="0" 
											thumb_list="/media/videos/thumbs/7_001.png,/media/videos/thumbs/7_002.png,/media/videos/thumbs/7_003.png,/media/videos/thumbs/7_004.png,/media/videos/thumbs/7_005.png,"
										/>
																		<div class="menu" id="menu_226496">
										<ul class="fr">
											<li class="ui-state-default ui-corner-all btnDeleteMediaFromAlbum"><span class="ui-icon ui-icon-closethick">&nbsp;</span></li>
										</ul>
									</div>
									
								</div>
															<div
									class="thumbObject thumbnail_container_owner" 
									id="thumb_226493"
									media_id="226493" 
									album_id="46631"
									project_id="77186"
								>
																			<img class="thumb_img" src="/media/videos/thumbs/12_001.png" border="0" 
											thumb_list="/media/videos/thumbs/12_001.png,/media/videos/thumbs/12_002.png,/media/videos/thumbs/12_003.png,/media/videos/thumbs/12_004.png,/media/videos/thumbs/12_005.png,"
										/>
																		<div class="menu" id="menu_226493">
										<ul class="fr">
											<li class="ui-state-default ui-corner-all btnDeleteMediaFromAlbum"><span class="ui-icon ui-icon-closethick">&nbsp;</span></li>
										</ul>
									</div>
									
								</div>
															<div
									class="thumbObject thumbnail_container_owner" 
									id="thumb_226475"
									media_id="226475" 
									album_id="46631"
									project_id="77186"
								>
																			<img class="thumb_img" src="/media/photos/thumbs/30_001.jpg" border="0" 
											thumb_list="/media/photos/thumbs/30_001.jpg,"
										/>
																		<div class="menu" id="menu_226475">
										<ul class="fr">
											<li class="ui-state-default ui-corner-all btnDeleteMediaFromAlbum"><span class="ui-icon ui-icon-closethick">&nbsp;</span></li>
										</ul>
									</div>
									
								</div>
															<div
									class="thumbObject thumbnail_container_owner" 
									id="thumb_226479"
									media_id="226479" 
									album_id="46631"
									project_id="77186"
								>
																			<img class="thumb_img" src="/media/videos/thumbs/27_001.png" border="0" 
											thumb_list="/media/videos/thumbs/27_001.png,/media/videos/thumbs/27_002.png,/media/videos/thumbs/27_003.png,/media/videos/thumbs/27_004.png,/media/videos/thumbs/27_005.png,"
										/>
																		<div class="menu" id="menu_226479">
										<ul class="fr">
											<li class="ui-state-default ui-corner-all btnDeleteMediaFromAlbum"><span class="ui-icon ui-icon-closethick">&nbsp;</span></li>
										</ul>
									</div>
									
								</div>
															<div
									class="thumbObject thumbnail_container_owner" 
									id="thumb_226468"
									media_id="226468" 
									album_id="46631"
									project_id="77186"
								>
																			<img class="thumb_img" src="/media/videos/thumbs/9_001.png" border="0" 
											thumb_list="/media/videos/thumbs/9_001.png,/media/videos/thumbs/9_002.png,/media/videos/thumbs/9_003.png,/media/videos/thumbs/9_004.png,/media/videos/thumbs/9_005.png,"
										/>
																		<div class="menu" id="menu_226468">
										<ul class="fr">
											<li class="ui-state-default ui-corner-all btnDeleteMediaFromAlbum"><span class="ui-icon ui-icon-closethick">&nbsp;</span></li>
										</ul>
									</div>
									
								</div>
															<div
									class="thumbObject thumbnail_container_owner" 
									id="thumb_226489"
									media_id="226489" 
									album_id="46631"
									project_id="77186"
								>
																			<img class="thumb_img" src="/media/photos/thumbs/29_001.jpg" border="0" 
											thumb_list="/media/photos/thumbs/29_001.jpg,"
										/>
																		<div class="menu" id="menu_226489">
										<ul class="fr">
											<li class="ui-state-default ui-corner-all btnDeleteMediaFromAlbum"><span class="ui-icon ui-icon-closethick">&nbsp;</span></li>
										</ul>
									</div>
									
								</div>
															<div
									class="thumbObject thumbnail_container_owner" 
									id="thumb_226470"
									media_id="226470" 
									album_id="46631"
									project_id="77186"
								>
																			<img class="thumb_img" src="/media/videos/thumbs/24_001.png" border="0" 
											thumb_list="/media/videos/thumbs/24_001.png,/media/videos/thumbs/24_002.png,/media/videos/thumbs/24_003.png,/media/videos/thumbs/24_004.png,/media/videos/thumbs/24_005.png,"
										/>
																		<div class="menu" id="menu_226470">
										<ul class="fr">
											<li class="ui-state-default ui-corner-all btnDeleteMediaFromAlbum"><span class="ui-icon ui-icon-closethick">&nbsp;</span></li>
										</ul>
									</div>
									
								</div>
															<div
									class="thumbObject thumbnail_container_owner" 
									id="thumb_226487"
									media_id="226487" 
									album_id="46631"
									project_id="77186"
								>
																			<img class="thumb_img" src="/media/photos/thumbs/21_001.jpg" border="0" 
											thumb_list="/media/photos/thumbs/21_001.jpg,"
										/>
																		<div class="menu" id="menu_226487">
										<ul class="fr">
											<li class="ui-state-default ui-corner-all btnDeleteMediaFromAlbum"><span class="ui-icon ui-icon-closethick">&nbsp;</span></li>
										</ul>
									</div>
									
								</div>
															<div
									class="thumbObject thumbnail_container_owner" 
									id="thumb_226471"
									media_id="226471" 
									album_id="46631"
									project_id="77186"
								>
																			<img class="thumb_img" src="/media/photos/thumbs/13_001.jpg" border="0" 
											thumb_list="/media/photos/thumbs/13_001.jpg,"
										/>
																		<div class="menu" id="menu_226471">
										<ul class="fr">
											<li class="ui-state-default ui-corner-all btnDeleteMediaFromAlbum"><span class="ui-icon ui-icon-closethick">&nbsp;</span></li>
										</ul>
									</div>
									
								</div>
															<div
									class="thumbObject thumbnail_container_owner" 
									id="thumb_226490"
									media_id="226490" 
									album_id="46631"
									project_id="77186"
								>
																			<img class="thumb_img" src="/media/photos/thumbs/12_001.jpg" border="0" 
											thumb_list="/media/photos/thumbs/12_001.jpg,"
										/>
																		<div class="menu" id="menu_226490">
										<ul class="fr">
											<li class="ui-state-default ui-corner-all btnDeleteMediaFromAlbum"><span class="ui-icon ui-icon-closethick">&nbsp;</span></li>
										</ul>
									</div>
									
								</div>
																	</div>
				</div>
							<div class='row lh11' id="row_197785" style="overflow: hidden;">
					<div class="w50">197785</div>
					<div class="w200"><a href='/albums/edit/id/197785/'>tester</a></div>
					<div class="w50">
													<button id="btn_197785" class="uibutton deleteAlbum" albumid="197785" icon-type="ui-icon-closethick" ></button>
											</div>
					<br clear="all" />
					<div class="thumblist _thumbcontainer" albumid="197785">
																				<div
									class="thumbObject thumbnail_container_owner" 
									id="thumb_226478"
									media_id="226478" 
									album_id="197785"
									project_id="77186"
								>
																			<img class="thumb_img" src="/media/photos/thumbs/27_001.jpg" border="0" 
											thumb_list="/media/photos/thumbs/27_001.jpg,"
										/>
																		<div class="menu" id="menu_226478">
										<ul class="fr">
											<li class="ui-state-default ui-corner-all btnDeleteMediaFromAlbum"><span class="ui-icon ui-icon-closethick">&nbsp;</span></li>
										</ul>
									</div>
									
								</div>
															<div
									class="thumbObject thumbnail_container_owner" 
									id="thumb_226491"
									media_id="226491" 
									album_id="197785"
									project_id="77186"
								>
																			<img class="thumb_img" src="/media/videos/thumbs/3_001.png" border="0" 
											thumb_list="/media/videos/thumbs/3_001.png,/media/videos/thumbs/3_002.png,/media/videos/thumbs/3_003.png,/media/videos/thumbs/3_004.png,/media/videos/thumbs/3_005.png,"
										/>
																		<div class="menu" id="menu_226491">
										<ul class="fr">
											<li class="ui-state-default ui-corner-all btnDeleteMediaFromAlbum"><span class="ui-icon ui-icon-closethick">&nbsp;</span></li>
										</ul>
									</div>
									
								</div>
															<div
									class="thumbObject thumbnail_container_owner" 
									id="thumb_226495"
									media_id="226495" 
									album_id="197785"
									project_id="77186"
								>
																			<img class="thumb_img" src="/media/photos/thumbs/19_001.jpg" border="0" 
											thumb_list="/media/photos/thumbs/19_001.jpg,"
										/>
																		<div class="menu" id="menu_226495">
										<ul class="fr">
											<li class="ui-state-default ui-corner-all btnDeleteMediaFromAlbum"><span class="ui-icon ui-icon-closethick">&nbsp;</span></li>
										</ul>
									</div>
									
								</div>
															<div
									class="thumbObject thumbnail_container_owner" 
									id="thumb_226471"
									media_id="226471" 
									album_id="197785"
									project_id="77186"
								>
																			<img class="thumb_img" src="/media/photos/thumbs/13_001.jpg" border="0" 
											thumb_list="/media/photos/thumbs/13_001.jpg,"
										/>
																		<div class="menu" id="menu_226471">
										<ul class="fr">
											<li class="ui-state-default ui-corner-all btnDeleteMediaFromAlbum"><span class="ui-icon ui-icon-closethick">&nbsp;</span></li>
										</ul>
									</div>
									
								</div>
															<div
									class="thumbObject thumbnail_container_owner" 
									id="thumb_226482"
									media_id="226482" 
									album_id="197785"
									project_id="77186"
								>
																			<img class="thumb_img" src="/media/photos/thumbs/1_001.jpg" border="0" 
											thumb_list="/media/photos/thumbs/1_001.jpg,"
										/>
																		<div class="menu" id="menu_226482">
										<ul class="fr">
											<li class="ui-state-default ui-corner-all btnDeleteMediaFromAlbum"><span class="ui-icon ui-icon-closethick">&nbsp;</span></li>
										</ul>
									</div>
									
								</div>
															<div
									class="thumbObject thumbnail_container_owner" 
									id="thumb_226486"
									media_id="226486" 
									album_id="197785"
									project_id="77186"
								>
																			<img class="thumb_img" src="/media/photos/thumbs/22_001.jpg" border="0" 
											thumb_list="/media/photos/thumbs/22_001.jpg,"
										/>
																		<div class="menu" id="menu_226486">
										<ul class="fr">
											<li class="ui-state-default ui-corner-all btnDeleteMediaFromAlbum"><span class="ui-icon ui-icon-closethick">&nbsp;</span></li>
										</ul>
									</div>
									
								</div>
															<div
									class="thumbObject thumbnail_container_owner" 
									id="thumb_226496"
									media_id="226496" 
									album_id="197785"
									project_id="77186"
								>
																			<img class="thumb_img" src="/media/videos/thumbs/7_001.png" border="0" 
											thumb_list="/media/videos/thumbs/7_001.png,/media/videos/thumbs/7_002.png,/media/videos/thumbs/7_003.png,/media/videos/thumbs/7_004.png,/media/videos/thumbs/7_005.png,"
										/>
																		<div class="menu" id="menu_226496">
										<ul class="fr">
											<li class="ui-state-default ui-corner-all btnDeleteMediaFromAlbum"><span class="ui-icon ui-icon-closethick">&nbsp;</span></li>
										</ul>
									</div>
									
								</div>
															<div
									class="thumbObject thumbnail_container_owner" 
									id="thumb_226497"
									media_id="226497" 
									album_id="197785"
									project_id="77186"
								>
																			<img class="thumb_img" src="/media/photos/thumbs/2_001.jpg" border="0" 
											thumb_list="/media/photos/thumbs/2_001.jpg,"
										/>
																		<div class="menu" id="menu_226497">
										<ul class="fr">
											<li class="ui-state-default ui-corner-all btnDeleteMediaFromAlbum"><span class="ui-icon ui-icon-closethick">&nbsp;</span></li>
										</ul>
									</div>
									
								</div>
															<div
									class="thumbObject thumbnail_container_owner" 
									id="thumb_226485"
									media_id="226485" 
									album_id="197785"
									project_id="77186"
								>
																			<img class="thumb_img" src="/media/videos/thumbs/8_001.png" border="0" 
											thumb_list="/media/videos/thumbs/8_001.png,/media/videos/thumbs/8_002.png,/media/videos/thumbs/8_003.png,/media/videos/thumbs/8_004.png,/media/videos/thumbs/8_005.png,"
										/>
																		<div class="menu" id="menu_226485">
										<ul class="fr">
											<li class="ui-state-default ui-corner-all btnDeleteMediaFromAlbum"><span class="ui-icon ui-icon-closethick">&nbsp;</span></li>
										</ul>
									</div>
									
								</div>
															<div
									class="thumbObject thumbnail_container_owner" 
									id="thumb_226487"
									media_id="226487" 
									album_id="197785"
									project_id="77186"
								>
																			<img class="thumb_img" src="/media/photos/thumbs/21_001.jpg" border="0" 
											thumb_list="/media/photos/thumbs/21_001.jpg,"
										/>
																		<div class="menu" id="menu_226487">
										<ul class="fr">
											<li class="ui-state-default ui-corner-all btnDeleteMediaFromAlbum"><span class="ui-icon ui-icon-closethick">&nbsp;</span></li>
										</ul>
									</div>
									
								</div>
															<div
									class="thumbObject thumbnail_container_owner" 
									id="thumb_226484"
									media_id="226484" 
									album_id="197785"
									project_id="77186"
								>
																			<img class="thumb_img" src="/media/videos/thumbs/21_001.png" border="0" 
											thumb_list="/media/videos/thumbs/21_001.png,/media/videos/thumbs/21_002.png,/media/videos/thumbs/21_003.png,/media/videos/thumbs/21_004.png,/media/videos/thumbs/21_005.png,"
										/>
																		<div class="menu" id="menu_226484">
										<ul class="fr">
											<li class="ui-state-default ui-corner-all btnDeleteMediaFromAlbum"><span class="ui-icon ui-icon-closethick">&nbsp;</span></li>
										</ul>
									</div>
									
								</div>
															<div
									class="thumbObject thumbnail_container_owner" 
									id="thumb_226480"
									media_id="226480" 
									album_id="197785"
									project_id="77186"
								>
																			<img class="thumb_img" src="/media/videos/thumbs/13_001.png" border="0" 
											thumb_list="/media/videos/thumbs/13_001.png,/media/videos/thumbs/13_002.png,/media/videos/thumbs/13_003.png,/media/videos/thumbs/13_004.png,/media/videos/thumbs/13_005.png,"
										/>
																		<div class="menu" id="menu_226480">
										<ul class="fr">
											<li class="ui-state-default ui-corner-all btnDeleteMediaFromAlbum"><span class="ui-icon ui-icon-closethick">&nbsp;</span></li>
										</ul>
									</div>
									
								</div>
															<div
									class="thumbObject thumbnail_container_owner" 
									id="thumb_226467"
									media_id="226467" 
									album_id="197785"
									project_id="77186"
								>
																			<img class="thumb_img" src="/media/photos/thumbs/4_001.jpg" border="0" 
											thumb_list="/media/photos/thumbs/4_001.jpg,"
										/>
																		<div class="menu" id="menu_226467">
										<ul class="fr">
											<li class="ui-state-default ui-corner-all btnDeleteMediaFromAlbum"><span class="ui-icon ui-icon-closethick">&nbsp;</span></li>
										</ul>
									</div>
									
								</div>
															<div
									class="thumbObject thumbnail_container_owner" 
									id="thumb_226476"
									media_id="226476" 
									album_id="197785"
									project_id="77186"
								>
																			<img class="thumb_img" src="/media/photos/thumbs/10_001.jpg" border="0" 
											thumb_list="/media/photos/thumbs/10_001.jpg,"
										/>
																		<div class="menu" id="menu_226476">
										<ul class="fr">
											<li class="ui-state-default ui-corner-all btnDeleteMediaFromAlbum"><span class="ui-icon ui-icon-closethick">&nbsp;</span></li>
										</ul>
									</div>
									
								</div>
															<div
									class="thumbObject thumbnail_container_owner" 
									id="thumb_226470"
									media_id="226470" 
									album_id="197785"
									project_id="77186"
								>
																			<img class="thumb_img" src="/media/videos/thumbs/24_001.png" border="0" 
											thumb_list="/media/videos/thumbs/24_001.png,/media/videos/thumbs/24_002.png,/media/videos/thumbs/24_003.png,/media/videos/thumbs/24_004.png,/media/videos/thumbs/24_005.png,"
										/>
																		<div class="menu" id="menu_226470">
										<ul class="fr">
											<li class="ui-state-default ui-corner-all btnDeleteMediaFromAlbum"><span class="ui-icon ui-icon-closethick">&nbsp;</span></li>
										</ul>
									</div>
									
								</div>
															<div
									class="thumbObject thumbnail_container_owner" 
									id="thumb_226475"
									media_id="226475" 
									album_id="197785"
									project_id="77186"
								>
																			<img class="thumb_img" src="/media/photos/thumbs/30_001.jpg" border="0" 
											thumb_list="/media/photos/thumbs/30_001.jpg,"
										/>
																		<div class="menu" id="menu_226475">
										<ul class="fr">
											<li class="ui-state-default ui-corner-all btnDeleteMediaFromAlbum"><span class="ui-icon ui-icon-closethick">&nbsp;</span></li>
										</ul>
									</div>
									
								</div>
															<div
									class="thumbObject thumbnail_container_owner" 
									id="thumb_226473"
									media_id="226473" 
									album_id="197785"
									project_id="77186"
								>
																			<img class="thumb_img" src="/media/photos/thumbs/26_001.jpg" border="0" 
											thumb_list="/media/photos/thumbs/26_001.jpg,"
										/>
																		<div class="menu" id="menu_226473">
										<ul class="fr">
											<li class="ui-state-default ui-corner-all btnDeleteMediaFromAlbum"><span class="ui-icon ui-icon-closethick">&nbsp;</span></li>
										</ul>
									</div>
									
								</div>
															<div
									class="thumbObject thumbnail_container_owner" 
									id="thumb_226483"
									media_id="226483" 
									album_id="197785"
									project_id="77186"
								>
																			<img class="thumb_img" src="/media/videos/thumbs/14_001.png" border="0" 
											thumb_list="/media/videos/thumbs/14_001.png,/media/videos/thumbs/14_002.png,/media/videos/thumbs/14_003.png,/media/videos/thumbs/14_004.png,/media/videos/thumbs/14_005.png,"
										/>
																		<div class="menu" id="menu_226483">
										<ul class="fr">
											<li class="ui-state-default ui-corner-all btnDeleteMediaFromAlbum"><span class="ui-icon ui-icon-closethick">&nbsp;</span></li>
										</ul>
									</div>
									
								</div>
															<div
									class="thumbObject thumbnail_container_owner" 
									id="thumb_226489"
									media_id="226489" 
									album_id="197785"
									project_id="77186"
								>
																			<img class="thumb_img" src="/media/photos/thumbs/29_001.jpg" border="0" 
											thumb_list="/media/photos/thumbs/29_001.jpg,"
										/>
																		<div class="menu" id="menu_226489">
										<ul class="fr">
											<li class="ui-state-default ui-corner-all btnDeleteMediaFromAlbum"><span class="ui-icon ui-icon-closethick">&nbsp;</span></li>
										</ul>
									</div>
									
								</div>
															<div
									class="thumbObject thumbnail_container_owner" 
									id="thumb_226488"
									media_id="226488" 
									album_id="197785"
									project_id="77186"
								>
																			<img class="thumb_img" src="/media/photos/thumbs/23_001.jpg" border="0" 
											thumb_list="/media/photos/thumbs/23_001.jpg,"
										/>
																		<div class="menu" id="menu_226488">
										<ul class="fr">
											<li class="ui-state-default ui-corner-all btnDeleteMediaFromAlbum"><span class="ui-icon ui-icon-closethick">&nbsp;</span></li>
										</ul>
									</div>
									
								</div>
															<div
									class="thumbObject thumbnail_container_owner" 
									id="thumb_226479"
									media_id="226479" 
									album_id="197785"
									project_id="77186"
								>
																			<img class="thumb_img" src="/media/videos/thumbs/27_001.png" border="0" 
											thumb_list="/media/videos/thumbs/27_001.png,/media/videos/thumbs/27_002.png,/media/videos/thumbs/27_003.png,/media/videos/thumbs/27_004.png,/media/videos/thumbs/27_005.png,"
										/>
																		<div class="menu" id="menu_226479">
										<ul class="fr">
											<li class="ui-state-default ui-corner-all btnDeleteMediaFromAlbum"><span class="ui-icon ui-icon-closethick">&nbsp;</span></li>
										</ul>
									</div>
									
								</div>
															<div
									class="thumbObject thumbnail_container_owner" 
									id="thumb_226472"
									media_id="226472" 
									album_id="197785"
									project_id="77186"
								>
																			<img class="thumb_img" src="/media/videos/thumbs/10_001.png" border="0" 
											thumb_list="/media/videos/thumbs/10_001.png,/media/videos/thumbs/10_002.png,/media/videos/thumbs/10_003.png,/media/videos/thumbs/10_004.png,/media/videos/thumbs/10_005.png,"
										/>
																		<div class="menu" id="menu_226472">
										<ul class="fr">
											<li class="ui-state-default ui-corner-all btnDeleteMediaFromAlbum"><span class="ui-icon ui-icon-closethick">&nbsp;</span></li>
										</ul>
									</div>
									
								</div>
															<div
									class="thumbObject thumbnail_container_owner" 
									id="thumb_226477"
									media_id="226477" 
									album_id="197785"
									project_id="77186"
								>
																			<img class="thumb_img" src="/media/photos/thumbs/24_001.jpg" border="0" 
											thumb_list="/media/photos/thumbs/24_001.jpg,"
										/>
																		<div class="menu" id="menu_226477">
										<ul class="fr">
											<li class="ui-state-default ui-corner-all btnDeleteMediaFromAlbum"><span class="ui-icon ui-icon-closethick">&nbsp;</span></li>
										</ul>
									</div>
									
								</div>
															<div
									class="thumbObject thumbnail_container_owner" 
									id="thumb_226469"
									media_id="226469" 
									album_id="197785"
									project_id="77186"
								>
																			<img class="thumb_img" src="/media/videos/thumbs/1_001.png" border="0" 
											thumb_list="/media/videos/thumbs/1_001.png,/media/videos/thumbs/1_002.png,/media/videos/thumbs/1_003.png,/media/videos/thumbs/1_004.png,/media/videos/thumbs/1_005.png,"
										/>
																		<div class="menu" id="menu_226469">
										<ul class="fr">
											<li class="ui-state-default ui-corner-all btnDeleteMediaFromAlbum"><span class="ui-icon ui-icon-closethick">&nbsp;</span></li>
										</ul>
									</div>
									
								</div>
															<div
									class="thumbObject thumbnail_container_owner" 
									id="thumb_226490"
									media_id="226490" 
									album_id="197785"
									project_id="77186"
								>
																			<img class="thumb_img" src="/media/photos/thumbs/12_001.jpg" border="0" 
											thumb_list="/media/photos/thumbs/12_001.jpg,"
										/>
																		<div class="menu" id="menu_226490">
										<ul class="fr">
											<li class="ui-state-default ui-corner-all btnDeleteMediaFromAlbum"><span class="ui-icon ui-icon-closethick">&nbsp;</span></li>
										</ul>
									</div>
									
								</div>
															<div
									class="thumbObject thumbnail_container_owner" 
									id="thumb_226468"
									media_id="226468" 
									album_id="197785"
									project_id="77186"
								>
																			<img class="thumb_img" src="/media/videos/thumbs/9_001.png" border="0" 
											thumb_list="/media/videos/thumbs/9_001.png,/media/videos/thumbs/9_002.png,/media/videos/thumbs/9_003.png,/media/videos/thumbs/9_004.png,/media/videos/thumbs/9_005.png,"
										/>
																		<div class="menu" id="menu_226468">
										<ul class="fr">
											<li class="ui-state-default ui-corner-all btnDeleteMediaFromAlbum"><span class="ui-icon ui-icon-closethick">&nbsp;</span></li>
										</ul>
									</div>
									
								</div>
															<div
									class="thumbObject thumbnail_container_owner" 
									id="thumb_226493"
									media_id="226493" 
									album_id="197785"
									project_id="77186"
								>
																			<img class="thumb_img" src="/media/videos/thumbs/12_001.png" border="0" 
											thumb_list="/media/videos/thumbs/12_001.png,/media/videos/thumbs/12_002.png,/media/videos/thumbs/12_003.png,/media/videos/thumbs/12_004.png,/media/videos/thumbs/12_005.png,"
										/>
																		<div class="menu" id="menu_226493">
										<ul class="fr">
											<li class="ui-state-default ui-corner-all btnDeleteMediaFromAlbum"><span class="ui-icon ui-icon-closethick">&nbsp;</span></li>
										</ul>
									</div>
									
								</div>
															<div
									class="thumbObject thumbnail_container_owner" 
									id="thumb_226492"
									media_id="226492" 
									album_id="197785"
									project_id="77186"
								>
																			<img class="thumb_img" src="/media/photos/thumbs/14_001.jpg" border="0" 
											thumb_list="/media/photos/thumbs/14_001.jpg,"
										/>
																		<div class="menu" id="menu_226492">
										<ul class="fr">
											<li class="ui-state-default ui-corner-all btnDeleteMediaFromAlbum"><span class="ui-icon ui-icon-closethick">&nbsp;</span></li>
										</ul>
									</div>
									
								</div>
															<div
									class="thumbObject thumbnail_container_owner" 
									id="thumb_226481"
									media_id="226481" 
									album_id="197785"
									project_id="77186"
								>
																			<img class="thumb_img" src="/media/videos/thumbs/23_001.png" border="0" 
											thumb_list="/media/videos/thumbs/23_001.png,/media/videos/thumbs/23_002.png,/media/videos/thumbs/23_003.png,/media/videos/thumbs/23_004.png,/media/videos/thumbs/23_005.png,"
										/>
																		<div class="menu" id="menu_226481">
										<ul class="fr">
											<li class="ui-state-default ui-corner-all btnDeleteMediaFromAlbum"><span class="ui-icon ui-icon-closethick">&nbsp;</span></li>
										</ul>
									</div>
									
								</div>
																	</div>
				</div>
					</div>
	</div>
	<div id="toplong" class="fr panel" style="width:49%">
		<h2 style="color:white; font-size: 18px; margin: 5px; padding: 3px;">Associated Storyboards</h2>
		<div class="toolbarcontainer">
			<ul class="toolbar">
				<li><a href="/storyboards/newStoryboard/id/77186" class="colorbox uibutton" >Create Storyboard</a></li>
			</ul>
		</div>
		<div class="section" id="storyboardlist">
							<div class='row lh11' id="row_2" style="overflow: hidden;">
					<div class="w50">2</div>
					<div class="w200"><a href='/storyboards/edit/id/2/'>another storyboard</a></div>
					<div class="w50">
													<button id="btn_2" class="uibutton deleteAlbum" albumid="2" icon-type="ui-icon-closethick" ></button>
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