<?php /*%%SmartyHeaderCode:1453904585139c8b5246539-79417547%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '28aaf74f924f900759159d1a2ab14f0527cd0cd9' => 
    array (
      0 => '/home/firewall/www/vs.profferlabs.com/app/views/vhosts/default/Client/Projects/newalbum.tpl',
      1 => 1360570617,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1453904585139c8b5246539-79417547',
  'variables' => 
  array (
    'securityToken' => 0,
    'projectid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5139c8b527610',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5139c8b527610')) {function content_5139c8b527610($_smarty_tpl) {?><div id="toplong" class="panel">
	<form method='post' autocomplete="on" name='frmNewAlbum' id='frmNewAlbum'>
		<input type='hidden' name='c2bde370a08b5b1ae0c13e8c43463383' value='gIA5kv7pBn4ARu2OHhQoPQODtNTSUTERj82aPorcqp7WDxBIGy2m50VHXlxynw%3D%3D'>
		<input type='hidden' name='pid' id='pid' value='77186' />
		<div class='section'>
			<div class="row">
				<div class="label">Album Name</div>
				<div class="field w300">
					<input type="text" class="w200" id="aname" name="aname" placeholder="Album Name" />
				</div>
			</div>
			<div class="row">
				<div class="label"></div>
				<div class="field w150">
					<input type="button" name="btnnewalbum" id="btnnewalbum" value="Create Album" class="ui-button" onclick="checkNewAlbumForm();" />
				</div>
			</div>
		</div>
	</form>
</div>
<?php }} ?>