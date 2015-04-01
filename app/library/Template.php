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
		$this->twig = new \Twig_Environment($loader, array('cache' => Config::$s_cache_path));
	}
	
	public function generate($name,$params, $I_ERROR=FALSE) {
		if (!is_object($params)&&!is_array($params)) { return; }
		
//		if (!empty($params)) {
//			foreach ($params as $key=>$value) {
//				$smarty->assign($key,$value);
//			}
//		}
		
		$template = $this->twig->loadTemplate("$name.phtml");
		
		echo $template->render($params);
	}
	public static function make_template ($resource_type, $resource_name, &$template_source, &$template_timestamp, &$smarty_obj) {
			if( $resource_type == 'file' ) {
				if ( ! is_readable ( $resource_name )) {
					if (substr($resource_name,0,4)!="_ER_") { // if its not an error page, show error message
//                        global $themepath, $userpath, $TPL_PATH, $s_template_path;
                        $template_source = "
								Not found: $resource_name<hr>Theme path: ".Config::$themepath."<br />
								Template path: ".Config::$TPL_PATH." <br />
								s_template_path: ".Config::$s_template_path;
						require_once SMARTY_CORE_DIR . 'core.write_file.php';
						\smarty_core_write_file( array( 'filename'=>$smarty_obj->template_dir . DIRECTORY_SEPARATOR . $resource_name, 'contents'=>$template_source ), $smarty_obj ); 
						return true;
					} else { // its a LM error page. change path to proper location.
						$smarty_obj->template_dir=ERROR_TEMPLATE_PATH;
						$smarty_obj->compile_dir=Config::$s_compile_path;
						$smarty_obj->cache_dir=Config::$s_cache_path;
//						$smarty_obj->config_dir=Config::$s_config_path;
						$smarty_obj->display($resource_name);
						exit;
					}
				}
			} else {
				return false;
			}
		}


}
?>
