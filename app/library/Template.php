<?php

/**
* @filename lib_template.php
* @version 1.0
* @author Johnathan Proffer
* @desc 
* 		This is our template handler.  For scalability
* 		and keeping code separate (e.g. for outsourcing front-end
* 		design to subcontractors), we use the Smarty templating engine.
*/
namespace library;

require_once("smarty/Smarty.php");

final class Template extends \Smarty {
	
	/**
	 * Render a smarty template.  If no template exists, render an error template
	 * @global string $s_template_path
	 * @global string $s_compile_path
	 * @global string $s_cache_path
	 * @param string $name
	 * @param array $params
	 * @param bool $I_ERROR
	 */
	public function generate($name,$params, $I_ERROR=FALSE) {
		global $s_template_path, $s_compile_path, $s_cache_path, $s_config_path, $s_plugin_path;
		if (!is_object($params)&&!is_array($params)) { return; }
//		echo "name: $name";exit;
		$this->setTemplateDir($s_template_path);
		$this->setCompileDir($s_compile_path);
		$this->setConfigDir($s_config_path);
		$this->setCacheDir($s_cache_path); 
		$this->addPluginsDir($s_plugin_path);

		// set the default handler
		$this->default_template_handler_func = '\library\Template::make_template';
		if (!empty($params)) {
			foreach ($params as $key=>$value) {
				$this->assign($key,$value);
			}
		}
		
		$this->force_compile=true; 
		$this->debugging_ctrl=true;
		$this->caching=1;
		$this->display("$name.tpl");
	}
	public function tfetch($name,$params) {
		global $s_template_path, $s_compile_path, $s_cache_path, $s_config_path, $s_plugin_path;
		if (!is_object($params)&&!is_array($params)) { return; }
//		echo "name: $name";exit;
		$this->setTemplateDir($s_template_path);
		$this->setCompileDir($s_compile_path);
		$this->setConfigDir($s_config_path);
		$this->setCacheDir($s_cache_path); 
		$this->addPluginsDir($s_plugin_path);

		// set the default handler
		$this->default_template_handler_func = '\library\Template::make_template';
		if (!empty($params)) {
			foreach ($params as $key=>$value) {
				$this->assign($key,$value);
			}
		}
		
		$this->force_compile=true; 
		$this->debugging_ctrl=true;
		$this->caching=1;
		return $this->fetch("$name.tpl");		
	}
	/**
	 * Override smarty's make_template, and generate an error template if the template we wanted doesnt exist.
	 * @global string $themepath
	 * @global string $userpath
	 * @global string $TPL_PATH
	 * @global string $s_template_path
	 * @param string $resource_type
	 * @param string $resource_name
	 * @param string $template_source
	 * @param string $template_timestamp
	 * @param object $smarty_obj
	 * @return bool
	 */
	public static function make_template ($resource_type, $resource_name, $template_source, $template_timestamp, $smarty_obj) {
		if( $resource_type == 'file' ) {
			if ( ! is_readable ( $resource_name )) {
				if (substr($resource_name,0,4)!="_ER_") { // if its not an error page, show error message
					global $themepath, $userpath, $TPL_PATH, $s_template_path;
//					$template_source = "Not found: $resource_name<hr>Theme path: $themepath<br />Template path: $TPL_PATH <br />s_template_path: $s_template_path";
//					$file = $smarty_obj->template_dir[0] . $resource_name;
//					require_once SMARTY_DIR . 'sysplugins/smarty_internal_write_file.php';
//					\Smarty_Internal_Write_File::writeFile($file, $template_source, $smarty_obj);
//					return true;
					$smarty_obj->template_dir=ERROR_TEMPLATE_PATH;
					$smarty_obj->compile_dir=ERROR_TEMPLATE_PATH."/.templates_c";
					$smarty_obj->cache_dir=ERROR_TEMPLATE_PATH."/.cache";
					$smarty_obj->config_dir=s_config_path;
					$smarty_obj->assign("resource", $resource_name);
					$smarty_obj->assign("themepath", $themepath);
					$smarty_obj->assign("userpath", $userpath);
					$smarty_obj->assign("templatepath", $TPL_PATH);
					$smarty_obj->display("_ER_TEMPLATE_NOT_FOUND.tpl");
					exit;
				} else { // its a LM error page. change path to proper location.
					$smarty_obj->template_dir=ERROR_TEMPLATE_PATH;
					$smarty_obj->compile_dir=ERROR_TEMPLATE_PATH."/.templates_c";
					$smarty_obj->cache_dir=ERROR_TEMPLATE_PATH."/.cache";
					$smarty_obj->config_dir=s_config_path;
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
