<?php
	@define("DOMAIN",strtolower(rtrim($_SERVER['SERVER_NAME'],"/")));
	$_config_port_types=array(80=>"http",443=>"https");
	@$_https = $_config_port_types[$_SERVER['SERVER_PORT']];

	define("HTTPS", $_https);


	// APP PATHS
	if (empty($_SERVER['DOCUMENT_ROOT'])) {
		define("PATH_ROOT",realpath(dirname(__FILE__)."/../../"));
	} else {
		define("PATH_ROOT",$_SERVER['DOCUMENT_ROOT']);
	}
	define("PATH_WWW",HTTPS."://".DOMAIN);
	define("PATH_APP",PATH_ROOT."/app");
	define("PATH_LIB",PATH_APP."/library");
	define("PATH_WWW_CACHE", HTTPS."://".DOMAIN."/cached");
	define("PATH_MEDIA",PATH_ROOT."/media");
	define("PATH_WWW_MEDIA", HTTPS."://".DOMAIN."/media");
	define("JSLIB", "jquery");

	define("ERROR_TEMPLATE_PATH",PATH_ROOT."/app/error_pages");

	// SMARTY
	define("SMARTY_DIR", PATH_LIB."/smarty/");
	define("s_config_path",SMARTY_DIR);
	// CRYPTO
	define("USE_CRYPTO",TRUE);
	define("CRYPTO_MASTERKEY", 'GENERATE_YOUR_OWN_KEY');

	define("SMARTY_PLUGIN_PATH", PATH_LIB."/smarty/sysplugins");
	
?>
