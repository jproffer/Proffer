<?php /* Smarty version Smarty-3.1.7, created on 2013-03-20 03:37:02
		 compiled from "/home/firewall/www/vs.profferlabs.com/app/views/vhosts/default/Client/General/test.tpl" */ ?>
<?php /*%%SmartyHeaderCode:41060474151492edef3adf5-89877737%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e0fbaafe2c9301e665ed7317b7b301187a943c56' => 
    array (
      0 => '/home/firewall/www/vs.profferlabs.com/app/views/vhosts/default/Client/General/test.tpl',
      1 => 1363665472,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '41060474151492edef3adf5-89877737',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_51492edf020ef',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51492edf020ef')) {function content_51492edf020ef($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("includes/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<video width="480" height="264" controls preload="auto" id="my_video_1" tabindex="0">
	<source type="video/mp4" src="/media/videos/1.mp4"></source>
	<source type="video/webm" src="/media/videos/1.webm"></source>
    <object width="480" height="264" type="application/x-shockwave-flash" data="/js/plugins/jquery/flashmediaelement.swf">
        <param name="movie" value="/js/plugins/jquery/flashmediaelement.swf" />
        <param name="flashvars" value="controls=true&file=/media/videos/1.mp4" />
        <!-- Image as a last resort -->
        <img src="myvideo.jpg" width="480" height="264" title="No video playback capabilities" />
    </object>
</video>
<?php echo $_smarty_tpl->getSubTemplate ("includes/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
<?php }} ?>