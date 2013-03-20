<?php
define('PRODUCTION', true);

$DB_CONNECTOR		=  array("host"	=> "localhost", "uid"	=> "", "pwd"	=> "", "db"	=> "");
$MONGO_DB_CONNECTOR	=  array("host"	=> "localhost", "uid"	=> "", "pwd"	=> "", "db"	=> "", 'port' => '27017');


	$themepath			= "/themes/default";
	
	$TPL_BASE_PATH		= getDomainTemplatePath();
	$TPL_PATH			= "$TPL_BASE_PATH/$userpath";
	$s_template_path	= $TPL_PATH;
	$s_compile_path		= "$TPL_BASE_PATH/.templates_c";
	$s_cache_path		= "$TPL_BASE_PATH/.cache";

	$s_plugin_path		= PATH_LIB."/smarty/sysplugins";
	
	
	/**
	 * Try to find our domain's theme folder.  If none exists, then return 'default'.
	 * @return string
	 */
	function getDomainThemePath() {
		if (is_dir(PATH_ROOT."/themes/".DOMAIN)) {
			return DOMAIN;
		}
		$dom = explode(".",DOMAIN);
		while (array_shift($dom) != '') {	// shift elements off our array until we find a match, or nothing is left.
			$test = implode(".",$dom);
			if (is_dir(PATH_ROOT."/themes/$test")) {
				return $test;
			}
		}
		return 'default';
	}
	
	function getDomainTemplatePath() {
		if (is_dir(PATH_APP."/views/vhosts/".DOMAIN)) {
//			echo 'returning DOMAIN';exit;
			return PATH_APP."/views/vhosts/".DOMAIN;
		}
		$dom = explode(".",DOMAIN);
		while (array_shift($dom)) {	// shift elements off our array until we find a match, or nothing is left.
			$test = implode(".",$dom);
			if ($test == '') { break; }
//			echo "testing: $test<br />";
			if (is_dir(PATH_APP."/views/vhosts/$test")) {
//				echo "match found: ".PATH_APP."/views/vhosts/$test";exit;
				return PATH_APP."/views/vhosts/$test";
			}
		}
//		echo 'returning ' . PATH_APP."/views/vhosts/default";exit;
		return PATH_APP."/views/vhosts/default";
	}
	
?>
