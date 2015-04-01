<?php
namespace config;

class Config {
	public static 
			$userpath			= null,
			$themepath			= null,
			$TPL_PATH			= null,
			$s_template_path		= null,
			$s_compile_path		= null,
			$s_cache_path		= null;
	public static
			$CMAPIKEY			= "",
			$HTTPS				= "http";
	
	public static
			$DB_CONNECTOR = [
				"host"	=> "127.0.0.1",
				"uid"	=> "root",
				"pwd"	=> "",
				"db"	=> "mydb",
				"port"	=> 3306
			];
	public static $Twitter = [
			'oauth_access_token' => '',
			'oauth_access_token_secret' => '',
			'consumer_key' => '',
			'consumer_secret' => '',
			'base_url' => 'http://api.twitter.com/1.1/',
			//Request specific user
			'screen_name' => '',
	];
	public static
			$types = array(
				'jpg'	=>'image/jpeg',
				'jpeg'	=>'image/jpeg',
				'png'	=>'image/png',
				'gif'	=>'image/gif',
				'bmp'	=>'image/bmp',
				'avi'	=>'video/x-msvideo',
				'mpg'	=>'video/mpeg',
				'mpeg'	=>'video/mpeg',
				'mov'	=>'video/quicktime',
				'wmf'	=>'application/x-msmetafile',
				'doc'	=>'text/vnd.ms-word',
				'xls'	=>'application/vnd.ms-excel',
				'ppt'	=>'application/vnd.ms-powerpoint',
				'pdf'	=>'application/pdf',
				'css'	=>'text/css'
			),
			$_mtypes = array(
				'jpg',	'jpeg',	'png',	'gif',	'bmp',	'avi',	'mpg',
				'mov',	'wmf',	'doc',	'xls',	'ppt',	'pdf',	'css',
				'mpeg'
			),
			$_ftypes = array(
				"php",	"html",	"htm",	"txt",	"js",	"htc"
			),
			// OTHER/MISC
			$client_banned_extensions = array(
				"php",	"cfm",	"phps",	"pl",	"exe",	"com",
				"pif",	"dot",	"vbs",	"bat"
			);
};

?>
