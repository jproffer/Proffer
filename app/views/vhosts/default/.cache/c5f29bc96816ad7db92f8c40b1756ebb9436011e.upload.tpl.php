<?php /*%%SmartyHeaderCode:12217414535123fbd8687548-34865773%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c5f29bc96816ad7db92f8c40b1756ebb9436011e' => 
    array (
      0 => '/home/firewall/www/vs.profferlabs.com/app/views/vhosts/default/Client/Media/upload.tpl',
      1 => 1361227494,
      2 => 'file',
    ),
    'd09c536007830edb2f84e199d62a1a1329de7440' => 
    array (
      0 => '/home/firewall/www/vs.profferlabs.com/app/views/vhosts/default/Client/includes/header.tpl',
      1 => 1360570617,
      2 => 'file',
    ),
    'd4ba03b79ba41890529a0cc8978f9a0fd28d2b07' => 
    array (
      0 => '/home/firewall/www/vs.profferlabs.com/app/views/vhosts/default/Client/includes/menu.tpl',
      1 => 1360796789,
      2 => 'file',
    ),
    'e9d4d619f63ed68279681cbdf8b85194d7dfabc1' => 
    array (
      0 => '/home/firewall/www/vs.profferlabs.com/app/views/vhosts/default/Client/includes/footer.tpl',
      1 => 1360038412,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12217414535123fbd8687548-34865773',
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5123fbd86d4dc',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5123fbd86d4dc')) {function content_5123fbd86d4dc($_smarty_tpl) {?><!DOCTYPE html >
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
@import url('/cache/css/inc_050_topmenu.css');
@import url('/themes/default/plugins/colorbox.css?2271957919');
</style>
	<script type='text/javascript' src='/js/jquery.js?4046275924'></script>
<script type='text/javascript' src='/js/jqueryui.js?3554238949'></script>
<script type='text/javascript' src='/js/plugins/jquery/colorbox.js?223878822'></script>
<script type='text/javascript' src='/js/plugins/jquery/blueimp/00.script-template.js?4187638736'></script>
<script type='text/javascript' src='/js/plugins/jquery/blueimp/01.loadimage.js?1569559499'></script>
<script type='text/javascript' src='/js/plugins/jquery/blueimp/02.canvas-to-blob.js?2421429823'></script>
<script type='text/javascript' src='/js/plugins/jquery/blueimp/03.iframe-transport.js?2401139578'></script>
<script type='text/javascript' src='/js/plugins/jquery/blueimp/04.jquery-fileupload.js?847557633'></script>
<script type='text/javascript' src='/js/plugins/jquery/blueimp/05.fileupload-fp.js?2581192807'></script>
<script type='text/javascript' src='/js/plugins/jquery/blueimp/06.fileupload-ui.js?2700970869'></script>
<script type='text/javascript' src='/js/plugins/jquery/blueimp/jquery.postmessage-transport.js?2577797976'></script>
<script type='text/javascript' src='/js/plugins/jquery/blueimp/jquery.xdr-transport.js?4092004558'></script>
<script type='text/javascript' src='/get/js/name/Client_Media_upload'></script>

	<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
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
	<li><a href="/projects/list/">View/Edit</a></li>
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

   <!-- The file upload form used as target for the file upload widget -->
    <form id="fileupload" action="/General/upload" method="POST" enctype="multipart/form-data">
        <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
        <div class="row fileupload-buttonbar">
            <div class="span7">
                <!-- The fileinput-button span is used to style the file input field as button -->
                <span class="btn btn-success fileinput-button">
                    <i class="icon-plus icon-white"></i>
                    <span>Add files...</span>
                    <input type="file" name="files[]" multiple>
                </span>
                <button type="submit" class="btn btn-primary start ui-widget ui-button-text-only">
                    <i class="icon-upload icon-white"></i>
                    <span>Start upload</span>
                </button>
                <button type="reset" class="btn btn-warning cancel ui-widget ui-button-text-only">
                    <i class="icon-ban-circle icon-white"></i>
                    <span>Cancel upload</span>
                </button>
                <button type="button" class="btn btn-danger delete ui-widget ui-button-text-only">
                    <i class="icon-trash icon-white"></i>
                    <span>Delete</span>
                </button>
                <input type="checkbox" class="toggle">
            </div>
            <!-- The global progress information -->
            <div class="span5 fileupload-progress">
                <!-- The global progress bar -->
                <div class="progress progress-success progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                    <div class="bar" style="width:0%;"></div>
                </div>
                <!-- The extended global progress information -->
                <div class="progress-extended">&nbsp;</div>
            </div>
        </div>
        <!-- The loading indicator is shown during file processing -->
        <div class="fileupload-loading"></div>
        <br>
        <!-- The table listing the files available for upload/download -->
        <table role="presentation" class="table table-striped"><tbody class="files" data-toggle="modal-gallery" data-target="#modal-gallery"></tbody></table>
    </form>

  

<!-- The template to display files available for upload -->
<script id="template-upload" type="text/x-tmpl">
{% for (var i=0, file; file=o.files[i]; i++) { %}
    <tr class="template-upload">
        <td class="preview"><span class=""></span></td>
        <td class="name"><span>{%=file.name%}</span></td>
        <td class="size"><span>{%=o.formatFileSize(file.size)%}</span></td>
        {% if (file.error) { %}
            <td class="error" colspan="2"><span class="label label-important">Error</span> {%=file.error%}</td>
        {% } else if (o.files.valid && !i) { %}
            <td>
                <div class="progress progress-success progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0"><div class="bar" style="width:0%;"></div></div>
            </td>
            <td class="start">{% if (!o.options.autoUpload) { %}
                <button class="btn btn-primary">
                    <i class="icon-upload icon-white"></i>
                    <span>Start</span>
                </button>
            {% } %}</td>
        {% } else { %}
            <td colspan="2"></td>
        {% } %}
        <td class="cancel">{% if (!i) { %}
            <button class="btn btn-warning">
                <i class="icon-ban-circle icon-white"></i>
                <span>Cancel</span>
            </button>
        {% } %}</td>
    </tr>
{% } %}
</script>
<!-- The template to display files available for download -->
<script id="template-download" type="text/x-tmpl">
{% for (var i=0, file; file=o.files[i]; i++) { %}
    <tr class="template-download">
        {% if (file.error) { %}
            <td></td>
            <td class="name"><span>{%=file.name%}</span></td>
            <td class="size"><span>{%=o.formatFileSize(file.size)%}</span></td>
            <td class="error" colspan="2"><span class="label label-important">Error</span> {%=file.error%}</td>
        {% } else { %}
            <td class="preview">{% if (file.thumbnail_url) { %}
                <a href="{%=file.url%}" title="{%=file.name%}" data-gallery="gallery" download="{%=file.name%}"><img src="{%=file.thumbnail_url%}"></a>
            {% } %}</td>
            <td class="name">
                <a href="{%=file.url%}" title="{%=file.name%}" data-gallery="{%=file.thumbnail_url&&'gallery'%}" download="{%=file.name%}">{%=file.name%}</a>
            </td>
            <td class="size"><span>{%=o.formatFileSize(file.size)%}</span></td>
            <td colspan="2"></td>
        {% } %}
        <td class="delete">
            <button class="btn btn-danger" data-type="{%=file.delete_type%}" data-url="{%=file.delete_url%}"{% if (file.delete_with_credentials) { %} data-xhr-fields='{"withCredentials":true}'{% } %}>
                <i class="icon-trash icon-white"></i>
                <span>Delete</span>
            </button>
            <input type="checkbox" name="delete" value="1">
        </td>
    </tr>
{% } %}
</script>

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