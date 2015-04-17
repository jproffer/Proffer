<?php
namespace library;
use \config\Config as Config;

require_once("Twig/Autoloader.php");

/**
* @filename lib_template.php
* @version 2.0
* @author Johnathan Proffer
* @desc 
* 		This is our template handler.  For scalability
* 		and keeping code separate (e.g. for outsourcing front-end
* 		design to subcontractors), we use the Smarty templating engine.
* 		For simplicity there is only one function defined, since it's
* 		just a code snippet.  Ideally we could also manage header/footers here
* 		instead of in the smarty template file.
*/

final class Template {

	protected $twig;
	
	function __construct() {
		\Twig_Autoloader::register();
		$loader = new \Twig_Loader_Filesystem(Config::$TPL_PATH);
		$params = [
//			"debug" => true,
			"strict_variables" => true,
//			'cache' => Config::$s_cache_path
		];
		$this->twig = new \Twig_Environment($loader, $params); //, array('cache' => Config::$s_cache_path));
	}
	
	public function generate($name,$params, $I_ERROR=FALSE) {
		if (!is_object($params) && !is_array($params)) { return; }
		echo $this->twig->render("$name.phtml", $params);
	}
}
?>
