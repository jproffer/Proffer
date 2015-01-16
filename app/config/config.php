<?php

function print_h($data) {
	echo "<pre>".print_r($data,true)."</pre>";
}
function print_m($class) {
	if (gettype($class)!="object") {
		print_h($class);
	} else {
		print_h(get_class_methods($class));
	}
}


function safestring($text) { 
	return strtr($text, array(
	  "\x00" => '\x00',
	  "\n" => '\n', 
	  "\r" => '\r', 
	  '\\' => '\\\\',
	  "'" => "\'", 
	  '"' => '\"', 
	  "\x1a" => '\x1a'
	));
}


define("SHOW_ERRORS",		true);
define("DEBUG_INCLUDES",	true);
define("DEBUG_ROUTES",		true);
define("BENCHMARK",			true);
define("DEBUG_TEMPLATES",	true);

$http = ["80" => "http", "443" => "https"];
$http = $http[$_SERVER['SERVER_PORT']];
define("HTTPS", $http);
/**
* @filename config.php
* @package info.apricot
* @desc configuration file.
*/

define("VARCHAR",	0);
define("DATE",		1);
define("TIME",		2);
define("DATETIME",	3);
define("INT",		4);
define("CHK",		5);
define("FLOAT",		6);
define("PASSWORD", 	7);
define("CURRENCY",	8);

define("DOMAIN",strtolower(rtrim($_SERVER['SERVER_NAME'],"/")));

date_default_timezone_set("UTC");
define("CMAPIKEY","3991e9f78243430ebe8067815c9347ba");

// DATE ranges

//// today
//$tdS = strtotime(date("Y-m-d 00:00:00"));
//$tdE = strtotime(date("Y-m-d 23:59:59"));
//// this week
//$year=date("Y");
//$week=date("W");
//$twS = strtotime(date("Y-m-d 00:00:00", strtotime("{$year}-W{$week}-1"))); //Returns the date of monday in week
//$twE = strtotime(date("Y-m-d 23:59:59", strtotime("{$year}-W{$week}-7")));   //Returns the date of sunday in week
//
//// next week
//$nwyear=date("Y", strtotime("+1 week", time()));
//$nwweek=date("W", strtotime("+1 week", time()));
//$nwS = strtotime(date("Y-m-d 00:00:00", strtotime("{$nwyear}-W{$nwweek}-1"))); //Returns the date of monday in week
//$nwE = strtotime(date("Y-m-d 23:59:59", strtotime("{$nwyear}-W{$nwweek}-7")));   //Returns the date of sunday in week
//
//define("TODAY",  "$tdS|$tdE");
//define("THISWEEK", "$twS|$twE");
//define("NEXTWEEK", "$nwS|$nwE");
//define("OTHER",strtotime("+1 day", $nwE));

// APP PATHS
if (!defined($_SERVER['DOCUMENT_ROOT'])) {
	define("PATH_ROOT","/var/www/tutorary.com");
} else {
	define("PATH_ROOT",$_SERVER['DOCUMENT_ROOT']);
}
define("PATH_WWW",HTTPS."://".DOMAIN);
define("PATH_APP",PATH_ROOT."/app");
define("PATH_LIB",PATH_APP."/library");

// debugger
//require_once(PATH_LIB."/firephp.php");
// error handler
//require_once(PATH_APP."/Core/ErrorHandler.php");
// autoloader
require_once(PATH_APP."/Core/autoloader.php");
use 
	\Model\User,
	\config\Config;

//require_once(PATH_APP.'/Model/User.php');



define("ERROR_TEMPLATE_PATH",PATH_ROOT."/app/error_pages");

define("UPLOAD_IMG_DIR", PATH_ROOT."/profile/images");
define("UPLOAD_DOC_DIR", PATH_ROOT."/profile/documents");
define("UPLOAD_HR_DIR", PATH_ROOT."/profile/hr");
define("UPLOAD_TILE_DIR", PATH_ROOT."/profile/tiles");
// SMARTY
define("SMARTY_DIR", PATH_LIB."/smarty/");
define("s_config_path",SMARTY_DIR);
// CRYPTO
define("CRYPTO_MASTERKEY", 't-SVU\YT?}5VqF/cU3\o}",NVu.q:,^B');
define("USE_CRYPTO",TRUE);



session_start();

		$_GlobalIncludes = array(
			"GEOIPKEY"=>'',
			"GOOGLEAUTOLOADER"=>'<script type="text/javascript" src=""></script>'
		);
		
        switch ($_SESSION['user']->type) {
            case 'ADMIN': { Config::$userpath='Admin'; break; }
            case 'USER':
            case 'DEMO': { Config::$userpath='User'; break; }
            case 'VENDOR': { Config::$userpath='Vendor'; break; }
			default: { Config::$userpath='Public'; break; }
        }
Config::$HTTPS				= $http;
Config::$themepath			= "/themes/default";
Config::$TPL_PATH			= PATH_APP."/views/".Config::$userpath;
Config::$s_template_path		= Config::$TPL_PATH;
Config::$s_compile_path		= PATH_APP."/.templates_c";
Config::$s_cache_path		= PATH_APP."/.cache";
require_once("development.php");
        // TYPES
$uri = new \Core\Uri();

?>
