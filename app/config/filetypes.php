<?php
// TYPES
	$types = array(
		'jpg'=>'image/jpeg',
		'jpeg'=>'image/jpeg',
		'png'=>'image/png',
		'gif'=>'image/gif',
		'bmp'=>'image/bmp',
		'avi'=>'video/x-msvideo',
		'mpg'=>'video/mpeg',
		'mpeg'=>'video/mpeg',
		'mov'=>'video/quicktime',
		'wmf'=>'application/x-msmetafile',
		'doc'=>'text/vnd.ms-word',
		'xls'=>'application/vnd.ms-excel',
		'ppt'=>'application/vnd.ms-powerpoint',
		'pdf'=>'application/pdf',
		'css'=>'text/css'
	);
	$_mtypes = array(
		'jpg',	'jpeg',	'png',	'gif',	'bmp',	'avi',	'mpg',
		'mov',	'wmf',	'doc',	'xls',	'ppt',	'pdf',	'css',
		'mpeg'
	);
	$_ftypes = array(
		"php",	"html",	"htm",	"txt",	"js",	"htc"
	);
	

// OTHER/MISC
$client_banned_extensions = array(
	"php",	"cfm",	"phps",	"pl",	"exe",	"com",
	"pif",	"dot",	"vbs",	"bat"
);
//$types = array(
//	"filetypes" => $types,
//	"mediatypes" => $_mtypes,
//	"files" => $_ftypes,
//	"banned" => $client_banned_extensions
//);
//	echo "<pre>";
//	print_r(yaml_emit($types));exit;
