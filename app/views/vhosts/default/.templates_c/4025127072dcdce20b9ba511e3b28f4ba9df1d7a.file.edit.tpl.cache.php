<?php /* Smarty version Smarty-3.1.7, created on 2013-03-19 06:16:50
		 compiled from "/home/firewall/www/vs.profferlabs.com/app/views/vhosts/default/Client/Storyboards/edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1426606831514802d2745d10-81535430%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4025127072dcdce20b9ba511e3b28f4ba9df1d7a' => 
    array (
      0 => '/home/firewall/www/vs.profferlabs.com/app/views/vhosts/default/Client/Storyboards/edit.tpl',
      1 => 1363338543,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1426606831514802d2745d10-81535430',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'storyboard' => 0,
    'users' => 0,
    'user' => 0,
    'projects' => 0,
    'project' => 0,
    'albums' => 0,
    'album' => 0,
    'available_media' => 0,
    'media' => 0,
    'thumb' => 0,
    'media_used' => 0,
    'node' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_514802d28ab7a',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_514802d28ab7a')) {function content_514802d28ab7a($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("includes/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<form method="post" name="frmStoryboard" id="frmStoryboard">
	<input type='hidden' name='storyboard_id' id='storyboard_id' value="<?php echo $_smarty_tpl->tpl_vars['storyboard']->value->getID();?>
" />
		<div class="panel" id="media_menu">
				<h4 style="margin: 4px 0;">Sorting Options</h4>
			<div class="toolbar">
				<ul>
					<li >
						<div class="fl label">User </div>
						<div class="fl">
							<select class="filterField" id="filterByUser">
								<option value="all">All</option>
								<?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value){
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>
									<option value="uid-<?php echo $_smarty_tpl->tpl_vars['user']->value->getID();?>
"><?php echo $_smarty_tpl->tpl_vars['user']->value->last_name;?>
, <?php echo $_smarty_tpl->tpl_vars['user']->value->first_name;?>
</option>
								<?php } ?>
							</select>
						</div>
					</li>
					<li >
						<div class="fl label">Project </div>
						<div class="fl">
							<select class="filterField" id="filterByProject">
								<option value="all">All</option>
								<?php  $_smarty_tpl->tpl_vars['project'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['project']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['projects']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['project']->key => $_smarty_tpl->tpl_vars['project']->value){
$_smarty_tpl->tpl_vars['project']->_loop = true;
?>
									<option value="pid-<?php echo $_smarty_tpl->tpl_vars['project']->value->getID();?>
|<?php echo $_smarty_tpl->tpl_vars['project']->value->albums_list;?>
"><?php echo $_smarty_tpl->tpl_vars['project']->value->name;?>
</option>
								<?php } ?>
							</select>
						</div>
					</li>
					<li >
						<div class="fl label">Album </div>
						<div class="fl">
							<select class="filterField" id="filterByAlbum">
								<option value="all">All</option>
								<?php  $_smarty_tpl->tpl_vars['album'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['album']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['albums']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['album']->key => $_smarty_tpl->tpl_vars['album']->value){
$_smarty_tpl->tpl_vars['album']->_loop = true;
?>
									<option value="aid-<?php echo $_smarty_tpl->tpl_vars['album']->value->getID();?>
"><?php echo $_smarty_tpl->tpl_vars['album']->value->name;?>
 (<?php echo $_smarty_tpl->tpl_vars['projects']->value[$_smarty_tpl->tpl_vars['album']->value->project_id]->name;?>
)</option>
								<?php } ?>
							</select>
						</div>
					</li>
				</ul>
							
				<div class="row" style="clear: both; margin: 5px 0 0 3px; padding-top: 5px;">
					<div class="fl label">Sort By: &nbsp;</div>
					<div class="fl">
						<label><input type="radio" name="sort" value="all" checked="checked">All</label>
						<label><input type="radio" name="sort" value="image" >Photos</label>
						<label><input type="radio" name="sort" value="video">Video</label>      
					</div>
				</div>
			</div>
		</div>
	<div class="panel fl" style="width: 370px;">
		<div class="tabbed_area">
			<ul class="tabs">
				<li><a href='' title="content_1" id='tab_1' class='tab active'>Media</a></li>
				<li><a href='' title="content_2" id='tab_2' class="tab">Special</a></li>
			</ul>
			<div id='content_1' class="tab_content media_unused">
				<ul id="media_list">
				<?php  $_smarty_tpl->tpl_vars['media'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['media']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['available_media']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['media']->key => $_smarty_tpl->tpl_vars['media']->value){
$_smarty_tpl->tpl_vars['media']->_loop = true;
?>
									<li class="imgContainer-<?php echo $_smarty_tpl->tpl_vars['media']->value->type;?>
 <?php echo $_smarty_tpl->tpl_vars['media']->value->type;?>
 uid-<?php echo $_smarty_tpl->tpl_vars['media']->value->uid;?>
 <?php echo $_smarty_tpl->tpl_vars['media']->value->projects;?>
 <?php echo $_smarty_tpl->tpl_vars['media']->value->albums;?>
" data-id="id-<?php echo $_smarty_tpl->tpl_vars['media']->value->getID();?>
" data-type="uid-<?php echo $_smarty_tpl->tpl_vars['media']->value->uid;?>
">
										<?php if ($_smarty_tpl->tpl_vars['media']->value->type=='image'){?>
											<a class='colorbox' href='/media/photos/<?php echo $_smarty_tpl->tpl_vars['media']->value->name;?>
'>
										<?php }?>
										<img 
											class=" fl thumb_img" 
											src="<?php echo $_smarty_tpl->tpl_vars['media']->value->thumbs[0];?>
" border="0" 
											thumb_list="<?php  $_smarty_tpl->tpl_vars['thumb'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['thumb']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['media']->value->thumbs; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['thumb']->key => $_smarty_tpl->tpl_vars['thumb']->value){
$_smarty_tpl->tpl_vars['thumb']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['thumb']->value;?>
,<?php } ?>" 
											media_id="<?php echo $_smarty_tpl->tpl_vars['media']->value->getID();?>
" 
											media_type="<?php echo $_smarty_tpl->tpl_vars['media']->value->type;?>
" 
											media_name="<?php echo $_smarty_tpl->tpl_vars['media']->value->name;?>
" 
											media_thumb="<?php echo $_smarty_tpl->tpl_vars['media']->value->thumbs[0];?>
"
										/>
										<?php if ($_smarty_tpl->tpl_vars['media']->value->type=='image'){?>
											</a>
										<?php }?>

									</li>
				<?php } ?>
				</ul>
			</div>
			<div id='content_2' class="tab_content media_special">
				<ul id="special">
					<li class="imgContainer-special" data-type="text">
						<img 
							class="fl tool_thumb" 
							src='/media/special-text.png'
							tool_type="title" 
							source_img="/media/special-text-85.png"
						></li>
				</ul>
			</div>
		</div>
		<br clear="all" />
		<h3 class="title">Media In Use</h3>
		<div id="media_used">
			<?php  $_smarty_tpl->tpl_vars['media'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['media']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['media_used']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['media']->key => $_smarty_tpl->tpl_vars['media']->value){
$_smarty_tpl->tpl_vars['media']->_loop = true;
?>
					<div class="imgContainer-<?php echo $_smarty_tpl->tpl_vars['media']->value->type;?>
">
				<?php if ($_smarty_tpl->tpl_vars['media']->value->type=='image'){?>
						<a class='colorbox' href='/media/photos/<?php echo $_smarty_tpl->tpl_vars['media']->value->name;?>
'>
				<?php }?>
						<img 
							class=" fl thumb_img" 
							src="<?php echo $_smarty_tpl->tpl_vars['media']->value->thumbs[0];?>
" border="0" 
							thumb_list="<?php  $_smarty_tpl->tpl_vars['thumb'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['thumb']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['media']->value->thumbs; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['thumb']->key => $_smarty_tpl->tpl_vars['thumb']->value){
$_smarty_tpl->tpl_vars['thumb']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['thumb']->value;?>
,<?php } ?>" 
							media_id="<?php echo $_smarty_tpl->tpl_vars['media']->value->getID();?>
" 
							media_type="<?php echo $_smarty_tpl->tpl_vars['media']->value->type;?>
" 
							media_name="<?php echo $_smarty_tpl->tpl_vars['media']->value->name;?>
" 
							media_thumb="<?php echo $_smarty_tpl->tpl_vars['media']->value->thumbs[0];?>
"
						/>
				<?php if ($_smarty_tpl->tpl_vars['media']->value->type=='image'){?>
					</a>
				<?php }?>
					</div>
			<?php } ?>

		</div>
	</div>
	<div style="margin-left: 220px;">
		<div class="fl" style="width: 770px;">
			<div class="panel fl"  style="width: 770px;">
				<div class='section'>
				<div class="row"><input class="center size-18" style="width: 750px;" type='text' name='title' id='title' value='<?php echo $_smarty_tpl->tpl_vars['storyboard']->value->name;?>
' onblur="checkForTitleChange(this)" /></div>
				</div>
			</div>
			<div class="panel fl"  style="width: 770px;">
					<div class="center size-18 pad-10" style='margin-bottom: 15px;'><h3>Stitches</h3></div>
					<div class="nodedrop droparea panels" style="min-height: 95px; width: 770px;">
					<?php if ($_smarty_tpl->tpl_vars['storyboard']->value->nodes){?>
						<?php  $_smarty_tpl->tpl_vars['node'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['node']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['storyboard']->value->nodes; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['node']->key => $_smarty_tpl->tpl_vars['node']->value){
$_smarty_tpl->tpl_vars['node']->_loop = true;
?>
							<div class='nodepanel <?php if (($_smarty_tpl->tpl_vars['node']->value->media_id==-1)){?> title_sequence' media_type="title" <?php }else{ ?>' media_type="<?php echo $_smarty_tpl->tpl_vars['node']->value->media_type;?>
" <?php }?> node_id="<?php echo $_smarty_tpl->tpl_vars['node']->value->getID();?>
" start="<?php echo $_smarty_tpl->tpl_vars['node']->value->start_time;?>
" end="<?php echo $_smarty_tpl->tpl_vars['node']->value->end_time;?>
" media_id="<?php echo $_smarty_tpl->tpl_vars['node']->value->media_id;?>
" order_id="<?php echo $_smarty_tpl->tpl_vars['node']->value->order;?>
" style="overflow: hidden;">
								<div class="tapebox">
									start: <?php echo $_smarty_tpl->tpl_vars['node']->value->formatted_start_time;?>
<br />
									end: <?php echo $_smarty_tpl->tpl_vars['node']->value->formatted_end_time;?>

								</div>
								<div class="toolbarcontainer storyboardtoolbar hidden" >
									<ul class="toolbar">
										<li><a href="#" class="colorbox uibutton deleteAlbum" albumid="<?php echo $_smarty_tpl->tpl_vars['node']->value->getID();?>
" icon-type="ui-icon-closethick" >Delete</a>
									</ul>
								</div>
								<?php if (($_smarty_tpl->tpl_vars['node']->value->media_id==-1)){?>
									<img src="<?php echo $_smarty_tpl->tpl_vars['node']->value->thumbs[0];?>
" />
									<input maxlength="60" type="text" class="titlebox" value="<?php echo $_smarty_tpl->tpl_vars['node']->value->title_sequence->text;?>
" />
								<?php }?>
							</div>
						<?php } ?>
					<?php }?>
					</div>
			</div>
		</div>
	</div>
</form>
<?php echo $_smarty_tpl->getSubTemplate ("includes/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
<?php }} ?>