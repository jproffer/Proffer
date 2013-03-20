<?php /*%%SmartyHeaderCode:102377904150fe3820880935-28327496%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '15e661adb603a494bfd7592f8630c7f4dacfe4aa' => 
    array (
      0 => '/home/firewall/www/vs.profferlabs.com/app/views/vhosts/default/Public/General/test.tpl',
      1 => 1358748692,
      2 => 'file',
    ),
    '51a11d6b52842e78ca61bf77b4eb3b04bd98cadd' => 
    array (
      0 => '/home/firewall/www/vs.profferlabs.com/app/views/vhosts/default/Public/includes/header.tpl',
      1 => 1358450586,
      2 => 'file',
    ),
    '9ad057f63160082092c6c783276c5f9eb59c8bfc' => 
    array (
      0 => '/home/firewall/www/vs.profferlabs.com/app/views/vhosts/default/Public/includes/footer.tpl',
      1 => 1357664486,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '102377904150fe3820880935-28327496',
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_50fe382095577',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50fe382095577')) {function content_50fe382095577($_smarty_tpl) {?><!DOCTYPE html >
<html>
<head>
<title>Company Title</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta http-equiv="content-language" content="en" />
		<meta name="robots" content="all,follow" />
		<style type='text/css' media='screen' charset='utf-8'>@import url('http://vs.profferlabs.com/themes/default/inc_0_reset.css?1971502017');
@import url('http://vs.profferlabs.com/themes/default/inc_1_jquery.css?506022825');
@import url('http://vs.profferlabs.com/themes/default/inc_3_file-upload.css?3932438815');
@import url('http://vs.profferlabs.com/themes/default/inc_4_file-upload-noscript.css?91114233');
@import url('/cache/css/inc_01_Fluid_Baseline_Grid.css');
@import url('/cache/css/inc_2_main.css');
</style>
		<script type='text/javascript' src='http://vs.profferlabs.com/js/jquery.js?4046275924'></script>
<script type='text/javascript' src='http://vs.profferlabs.com/js/jqueryui.js?3554238949'></script>
<script type='text/javascript' src='http://vs.profferlabs.com/get/js/name/Public_General_test'></script>
<script type='text/javascript' src='http://vs.profferlabs.com/js/plugins/jquery/blueimp/00.script-template.js?4187638736'></script>
<script type='text/javascript' src='http://vs.profferlabs.com/js/plugins/jquery/blueimp/01.loadimage.js?1569559499'></script>
<script type='text/javascript' src='http://vs.profferlabs.com/js/plugins/jquery/blueimp/02.canvas-to-blob.js?2421429823'></script>
<script type='text/javascript' src='http://vs.profferlabs.com/js/plugins/jquery/blueimp/03.iframe-transport.js?2401139578'></script>
<script type='text/javascript' src='http://vs.profferlabs.com/js/plugins/jquery/blueimp/04.jquery-fileupload.js?847557633'></script>
<script type='text/javascript' src='http://vs.profferlabs.com/js/plugins/jquery/blueimp/05.fileupload-fp.js?2581192807'></script>
<script type='text/javascript' src='http://vs.profferlabs.com/js/plugins/jquery/blueimp/06.fileupload-ui.js?2700970869'></script>
<script type='text/javascript' src='http://vs.profferlabs.com/js/plugins/jquery/blueimp/jquery.postmessage-transport.js?2577797976'></script>
<script type='text/javascript' src='http://vs.profferlabs.com/js/plugins/jquery/blueimp/jquery.xdr-transport.js?4092004558'></script>

		<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->


</head>
<body>
<div id="main">
  <div id="top">
	<div style="float:right"> <span style="display:block; padding-top:30px"></span> </div>
	<span style='float: left;'><a href="#"><img src="/themes/default/images/logo.png" alt=""  class="border_none" /></a></span>
	<span style='line-height: 100px; height: 100px; padding: 0px; margin: 0px; float: left; font-size: 48px; font-weight: bold; font-family: Verdana, Tahoma, Arial;'>
		Company ABC
	</span>
  </div>
  <div id="header">
	<div class="menubar">
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
  <div >Copyright (c) 2013 CompanyName</div>
</div>
</html>

<?php }} ?>