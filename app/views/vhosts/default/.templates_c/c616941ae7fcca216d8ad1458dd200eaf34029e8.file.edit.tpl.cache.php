<?php /* Smarty version Smarty-3.1.7, created on 2013-03-12 08:06:08
		 compiled from "/home/firewall/www/vs.profferlabs.com/app/views/vhosts/default/Client/Albums/edit.tpl" */ ?>
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
  ),
  'nocache_hash' => '817876629513ee1f0680156-27543469',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'album' => 0,
    'media' => 0,
    'thumb' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_513ee1f073173',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_513ee1f073173')) {function content_513ee1f073173($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("includes/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<form method="post">
	<h1 style="color:white; font-size: 18px; margin: 5px; padding: 3px;"><?php echo $_smarty_tpl->tpl_vars['album']->value->name;?>
</h1>
	<div id="toplong" class="panel">
		
		<div class="toolbarcontainer">
			<ul class="toolbar">
				<?php if ($_smarty_tpl->tpl_vars['album']->value->name!='Videos'&&$_smarty_tpl->tpl_vars['album']->value->name!='Photos'&&$_smarty_tpl->tpl_vars['album']->value->isOwner()){?>
					<li><a href="#" class="colorbox uibutton deleteAlbum" albumid="<?php echo $_smarty_tpl->tpl_vars['album']->value->getID();?>
" icon-type="ui-icon-closethick" >Delete Album</a>
				<?php }?>
				<li><a href="/albums/upload/id/<?php echo $_smarty_tpl->tpl_vars['album']->value->getID();?>
" class="colorbox uibutton" >Upload Media</a></li>
			</ul>
		</div>
		<div class="section albumlist" id="albumlist">
				<div class='row lh11' id="row_<?php echo $_smarty_tpl->tpl_vars['album']->value->getID();?>
" style="overflow: hidden;">
					<?php if ($_smarty_tpl->tpl_vars['album']->value->media){?>
						<br clear="all" />
						<div class="thumblist">
							<h3>Media owned by you</h3>
							<?php  $_smarty_tpl->tpl_vars['media'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['media']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['album']->value->media; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['media']->key => $_smarty_tpl->tpl_vars['media']->value){
$_smarty_tpl->tpl_vars['media']->_loop = true;
?>
								<?php if ($_smarty_tpl->tpl_vars['media']->value->isOwner()){?>
									<div class="thumbnail_container_owner" id="thumb_<?php echo $_smarty_tpl->tpl_vars['media']->value->getID();?>
">
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
									</div>
								<?php }?>
							<?php } ?>
						</div>
						<br clear="all" />
						<div class="thumblist">
							<h3>Media owned by others</h3>
							<?php  $_smarty_tpl->tpl_vars['media'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['media']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['album']->value->media; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['media']->key => $_smarty_tpl->tpl_vars['media']->value){
$_smarty_tpl->tpl_vars['media']->_loop = true;
?>
								<?php if (!$_smarty_tpl->tpl_vars['media']->value->isOwner()){?>
									<div class="thumbnail_container_nonowner" id="thumb_<?php echo $_smarty_tpl->tpl_vars['media']->value->getID();?>
">
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
									</div>
								<?php }?>
							<?php } ?>
						</div>
					<?php }?>
				</div>
		</div>
	</div>
</form>
<?php echo $_smarty_tpl->getSubTemplate ("includes/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
<?php }} ?>