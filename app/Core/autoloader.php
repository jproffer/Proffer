<?php
/**
 * Autoloader v1.1
	* @author Johnathan Proffer
	* @Copyright (c) Johnathan Proffer
	* @license http://www.gnu.org/licenses/gpl-3.0.html GNU General Public Licence 
 **/

namespace Core;
/**
 * Autoload classes if possible.
 * @param class $cls 
 */
class AutoLoader {
	
	private static $PathList = array();
	
	public function __construct() {
		self::addPath("app");
		$args = func_get_args();
		foreach ($args as $arg) {
			self::addPath($arg);
		}
		spl_autoload_register('Core\AutoLoader::_autoload');
	}
	
	public static function addPath($path) {
		if (is_array($path)) {
			foreach ($path as $p) {
				self::addPath($p);
			}
		} else {
			$base = realpath(dirname(__FILE__)."/../../");
			$path = trim($path, "/");
			if (!is_dir("$base/$path")) {
				FB::log("error: $base/$path does not exist!");
				exit;
			}
			self::$PathList[]="$base/$path";
		}
	}
	
	public static function _autoload($class) {
		if (substr($class,0,7) == 'Smarty_') { // stupid smarty CaMeLcAsE
			$class = strtolower($class);
		}
		$_classFile = str_replace('\\', '/', $class);
		$_split = explode("/", $_classFile);
		$classFile = "$_classFile.php";
		foreach (self::$PathList as $path) {
			if (file_exists("$path/$classFile")) {
				require_once("$path/$classFile");
				return;
			}
		}
		
		// check relative path from file folder, in case it's a namespace
		$path = PATH_APP."/".__NAMESPACE__;
		if (file_exists("$path/$classFile")) {
			require_once("$path/$classFile");
			return;
		}
		//echo "Error: $class not found!";
		//exit;
	}
	
}
new AutoLoader();
AutoLoader::addPath("app/library/smarty/sysplugins", "app/library/smarty/plugins");

?>