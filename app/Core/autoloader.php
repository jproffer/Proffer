<?php
/**
 * Autoloader v1.3
 * @author Johnathan Proffer
 * @copyright (c) 2015 Johnathan Proffer
 * @var cls Class being called
 **/

function __autoload($cls) {
	$_cls=strtolower($cls);
	// smarty classes
//    static $_classes = array(
//        'smarty_config_source' => true,
//        'smarty_config_compiled' => true,
//        'smarty_security' => true,
//        'smarty_cacheresource' => true,
//        'smarty_cacheresource_custom' => true,
//        'smarty_cacheresource_keyvaluestore' => true,
//        'smarty_resource' => true,
//        'smarty_resource_custom' => true,
//        'smarty_resource_uncompiled' => true,
//        'smarty_resource_recompiled' => true,
//    );
//	if (substr($_cls,0,16) == "smarty_internal_" || isset($_classes[$_cls])) { 
//		$cls="$_cls.php";
//		if (file_exists(PATH_LIB."/smarty/sysplugins/$cls")) {
//			include(PATH_LIB."/smarty/sysplugins/$cls");
//		} else {
//			include(PATH_LIB."/smarty/plugins/$cls");
//		}
//		return;
//	}

	$path=str_replace("\\","/",$cls).".php";
	if (file_exists(PATH_APP."/".$path)) {
		require_once(PATH_APP."/".$path);
	} elseif (file_exists(PATH_LIB."/".$path)) {
		require_once(PATH_LIB."/".$path); 
	} elseif (file_exists(PATH_APP."/Controller/$cls.php")) {
		require_once(PATH_APP."/Controller/$cls.php");
	} else {
		echo "cant find $path!";exit;
	}
}

?>