<?php /* Smarty version Smarty-3.1.7, created on 2013-03-15 19:41:31
		 compiled from "/home/firewall/www/vs.profferlabs.com/app/views/vhosts/default/Client/Projects/edit.tpl" */ ?>
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
  ),
  'nocache_hash' => '17856360015143796bc3a386-08523413',
  'function' => 
  array (
  ),
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
  'unifunc' => 'content_5143796bd79e8',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5143796bd79e8')) {function content_5143796bd79e8($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("includes/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<form method="post">
	<?php echo $_smarty_tpl->tpl_vars['securitytoken']->value;?>

	<h1 style="color:white; font-size: 21px; margin: 5px; padding: 3px;"><?php echo $_smarty_tpl->tpl_vars['project']->value->name;?>
</h1>
	<div id="toplong" class="fl panel" style="width: 48%;">
		<h2 style="color:white; font-size: 18px; margin: 5px; padding: 3px;">Media &amp; Albums</h2>
		<div class="toolbarcontainer">
			<ul class="toolbar">
				<li><a href="/projects/invite/id/<?php echo $_smarty_tpl->tpl_vars['project']->value->getID();?>
" class="colorbox uibutton invitebutton" >Invite Users</a></li>
				<li><a href="/projects/newalbum/id/<?php echo $_smarty_tpl->tpl_vars['project']->value->getID();?>
" class="colorbox uibutton" >Create Album</a></li>
				<li><a href="/projects/upload/id/<?php echo $_smarty_tpl->tpl_vars['project']->value->getID();?>
" class="colorbox-iframe uibutton" >Upload Media</a></li>
			</ul>
		</div>
		<div class="section albumlist" id="albumlist">
			<div class='row lh11' style="overflow: hidden;">
				<h3 class="title">Available Media</h3>
				<div class="unsorted_thumblist _thumbcontainer" albumid="">
					<?php  $_smarty_tpl->tpl_vars['media'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['media']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['unsorted']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['media']->key => $_smarty_tpl->tpl_vars['media']->value){
$_smarty_tpl->tpl_vars['media']->_loop = true;
?>
						<div 
							class="thumbObject thumbnail_container<?php if ($_smarty_tpl->tpl_vars['media']->value->isOwner()){?>_owner<?php }else{ ?>_nonowner<?php }?>" 
							id="thumb_<?php echo $_smarty_tpl->tpl_vars['media']->value->getID();?>
" 
							album_id=""
							media_id="<?php echo $_smarty_tpl->tpl_vars['media']->value->getID();?>
" 
							project_id="<?php echo $_smarty_tpl->tpl_vars['project']->value->getID();?>
"
						>
							<?php if ($_smarty_tpl->tpl_vars['media']->value->processed){?>
								<img class="thumb_img" media_id="<?php echo $_smarty_tpl->tpl_vars['media']->value->getID();?>
" src="<?php echo $_smarty_tpl->tpl_vars['media']->value->thumbs[0];?>
" border="0" 
									thumb_list="<?php  $_smarty_tpl->tpl_vars['thumb'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['thumb']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['media']->value->thumbs; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['thumb']->key => $_smarty_tpl->tpl_vars['thumb']->value){
$_smarty_tpl->tpl_vars['thumb']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['thumb']->value;?>
,<?php } ?>"
								/>
							<?php }else{ ?>
								<img class="thumb_img"  media_id="<?php echo $_smarty_tpl->tpl_vars['media']->value->getID();?>
" thumb_list="/media/pending.png" src="/media/pending.png" border="0" />
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['media']->value->isOwner()){?>
							<div class="menu" id="menu_<?php echo $_smarty_tpl->tpl_vars['media']->value->getID();?>
">
								<ul class="fr">
									<li class="ui-state-default ui-corner-all btnDeleteMedia"><span class="ui-icon ui-icon-closethick">&nbsp;</span></li>
								</ul>
							</div>
							<?php }?>
						</div>
					<?php } ?>
				</div>
			</div>
			<h3 class="title">Albums</h3>
			<?php  $_smarty_tpl->tpl_vars['album'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['album']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['albums']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['album']->key => $_smarty_tpl->tpl_vars['album']->value){
$_smarty_tpl->tpl_vars['album']->_loop = true;
?>
				<div class='row lh11' id="row_<?php echo $_smarty_tpl->tpl_vars['album']->value->getID();?>
" style="overflow: hidden;">
					<div class="w50"><?php echo $_smarty_tpl->tpl_vars['album']->value->getID();?>
</div>
					<div class="w200"><a href='/albums/edit/id/<?php echo $_smarty_tpl->tpl_vars['album']->value->getID();?>
/'><?php echo $_smarty_tpl->tpl_vars['album']->value->name;?>
</a></div>
					<div class="w50">
						<?php if ($_smarty_tpl->tpl_vars['album']->value->name!='Videos'&&$_smarty_tpl->tpl_vars['album']->value->name!='Photos'&&$_smarty_tpl->tpl_vars['album']->value->isOwner()){?>
							<button id="btn_<?php echo $_smarty_tpl->tpl_vars['album']->value->getID();?>
" class="uibutton deleteAlbum" albumid="<?php echo $_smarty_tpl->tpl_vars['album']->value->getID();?>
" icon-type="ui-icon-closethick" ></button>
						<?php }?>
					</div>
					<br clear="all" />
					<div class="thumblist _thumbcontainer" albumid="<?php echo $_smarty_tpl->tpl_vars['album']->value->getID();?>
">
					<?php if ($_smarty_tpl->tpl_vars['album']->value->media){?>
							<?php  $_smarty_tpl->tpl_vars['media'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['media']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['album']->value->media; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['media']->key => $_smarty_tpl->tpl_vars['media']->value){
$_smarty_tpl->tpl_vars['media']->_loop = true;
?>
								<div
									class="thumbObject thumbnail_container<?php if ($_smarty_tpl->tpl_vars['media']->value->isOwner()){?>_owner<?php }else{ ?>_nonowner<?php }?>" 
									id="thumb_<?php echo $_smarty_tpl->tpl_vars['media']->value->getID();?>
"
									media_id="<?php echo $_smarty_tpl->tpl_vars['media']->value->getID();?>
" 
									album_id="<?php echo $_smarty_tpl->tpl_vars['album']->value->getID();?>
"
									project_id="<?php echo $_smarty_tpl->tpl_vars['project']->value->getID();?>
"
								>
									<?php if ($_smarty_tpl->tpl_vars['media']->value->processed){?>
										<img class="thumb_img" src="<?php echo $_smarty_tpl->tpl_vars['media']->value->thumbs[0];?>
" border="0" 
											thumb_list="<?php  $_smarty_tpl->tpl_vars['thumb'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['thumb']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['media']->value->thumbs; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['thumb']->key => $_smarty_tpl->tpl_vars['thumb']->value){
$_smarty_tpl->tpl_vars['thumb']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['thumb']->value;?>
,<?php } ?>"
										/>
									<?php }else{ ?>
										<img class="thumb_img" thumb_list="/media/pending.png" src="/media/pending.png" border="0" />
									<?php }?>
									<div class="menu" id="menu_<?php echo $_smarty_tpl->tpl_vars['media']->value->getID();?>
">
										<ul class="fr">
											<li class="ui-state-default ui-corner-all btnDeleteMediaFromAlbum"><span class="ui-icon ui-icon-closethick">&nbsp;</span></li>
										</ul>
									</div>
									
								</div>
							<?php } ?>
					<?php }?>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
	<div id="toplong" class="fr panel" style="width:49%">
		<h2 style="color:white; font-size: 18px; margin: 5px; padding: 3px;">Associated Storyboards</h2>
		<div class="toolbarcontainer">
			<ul class="toolbar">
				<li><a href="/storyboards/newStoryboard/id/<?php echo $_smarty_tpl->tpl_vars['project']->value->getID();?>
" class="colorbox uibutton" >Create Storyboard</a></li>
			</ul>
		</div>
		<div class="section" id="storyboardlist">
			<?php  $_smarty_tpl->tpl_vars['storyboard'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['storyboard']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['storyboards']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['storyboard']->key => $_smarty_tpl->tpl_vars['storyboard']->value){
$_smarty_tpl->tpl_vars['storyboard']->_loop = true;
?>
				<div class='row lh11' id="row_<?php echo $_smarty_tpl->tpl_vars['storyboard']->value->getID();?>
" style="overflow: hidden;">
					<div class="w50"><?php echo $_smarty_tpl->tpl_vars['storyboard']->value->getID();?>
</div>
					<div class="w200"><a href='/storyboards/edit/id/<?php echo $_smarty_tpl->tpl_vars['storyboard']->value->getID();?>
/'><?php echo $_smarty_tpl->tpl_vars['storyboard']->value->name;?>
</a></div>
					<div class="w50">
						<?php if ($_smarty_tpl->tpl_vars['storyboard']->value->isOwner()){?>
							<button id="btn_<?php echo $_smarty_tpl->tpl_vars['storyboard']->value->getID();?>
" class="uibutton deleteAlbum" albumid="<?php echo $_smarty_tpl->tpl_vars['storyboard']->value->getID();?>
" icon-type="ui-icon-closethick" ></button>
						<?php }?>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</form>
<?php echo $_smarty_tpl->getSubTemplate ("includes/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
<?php }} ?>