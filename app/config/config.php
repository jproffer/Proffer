<?php
	/**
	* Main configuration file
	* @todo: allow ini/xml/json-based configuration files
	* @author Johnathan Proffer
	*/
	ini_set("error_reporting", E_ALL & ~E_NOTICE);
	
	require_once("public_controllers.php");
	require_once("app_vars.php");
	require_once("sys_vars_functions.php");
	require_once("paths_urls.php");


	$TRACE = array();


	/**
	 * Include default core files that the system needs in order to function
	 * @todo: Perhaps switch to namespaced inclusion system
	 */
	require_once(PATH_LIB."/firephp.php");
//	require_once(PATH_APP."/Core/ErrorHandler.php");
	require_once(PATH_APP."/Core/autoloader.php");
	require_once(PATH_APP.'/Model/User.php');


	
	// user types
	
	session_start();
	@$CURRENT_USER = $_SESSION['user'];
	
	if (!is_object($CURRENT_USER) || $CURRENT_USER->uType === '') {
		$userpath = "Public";
	} else {
		switch ($CURRENT_USER->uType) {
			case USERTYPE_ADMIN: { $userpath='Admin'; break; }
			case USERTYPE_USER:{ $userpath='Client'; break; }
			default: { $userpath='Public'; break; }
		}
	}
	/**
	 * Here, we pull in a development config file which could override API keys, db addresses, etc.
	 */
	if (DOMAIN == '') {
		define('CLI', true);
	} else {
		define('CLI', false);
	}
	if (file_exists(dirname(__FILE__)."/development.php")) {
//	if (preg_match("/profferlabs|localhost|127\.0\.0\.1|192\.168\./", DOMAIN) || DOMAIN == '') { // development box domains
		require_once("development.php");
	} else {
		require_once("production.php");
	}
	require_once("filetypes.php");


	$uri = new Core\Uri();

?>
