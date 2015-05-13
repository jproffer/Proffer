<?php
namespace library;
use \config\Config as Config;

require_once("Twig/Autoloader.php");

/**
* @filename Template.php
* @version 2.1
* @author Johnathan Proffer
* @desc 
* 		This is our template handler.  For scalability
* 		and keeping code separate (e.g. for outsourcing front-end
* 		design to subcontractors), we use the Twig templating engine.
* 		For simplicity there is only one function defined, since it's
* 		just a code snippet.  Ideally we could also manage header/footers here
* 		instead of in the twig template file.
*/

final class Template {

	protected $twig;
	
	function __construct() {
		\Twig_Autoloader::register();
		$loader = new \Twig_Loader_Filesystem(Config::$TPL_PATH);
		$params = [
			"strict_variables" => true,
		];
		$this->twig = new \Twig_Environment($loader, $params);
	}
	
	public function generate($name,$params, $I_ERROR=FALSE) {
		if (!is_object($params) && !is_array($params)) { return; }
		try {
		echo $this->twig->render("$name.phtml", $params);
		} catch (\Twig_Error_Loader $e) {
			$params = [
				"status_code" => "0x0095",
				"status_text" => "Template $name.phtml not found."
			];
			echo $this->twig->render("_errors/template_not_found.phtml", $params);
		} catch (Exception $e) {
			echo "<pre>"; 
			print_r($e);
			exit;
		}
	}
}
?>
