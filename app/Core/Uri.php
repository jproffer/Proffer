<?php

/**
 * Core URI class
 * Responsible for parsing URI into controller/function, and creating key/value pairs.
 * @author Johnathan Proffer
 * @Copyright (c) Johnathan Proffer
 * @license http://www.gnu.org/licenses/gpl-3.0.html GNU General Public Licence 
*/

namespace Core;


class Uri {
	
	const DEFAULT_CONTROLLER = "Main";
	const DEFAULT_FUNCTION = "index";
	
	private $params = [];
	
	public function __construct() {
		$this->params = [];
		$path = trim(parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH), "/");
		
		@list($controller, $action, $params) = explode("/", $path, 3);
//		$path = preg_replace('/[^a-zA-Z0-9]/', "", $path);

		$this->controller = ucwords(strtolower($controller));
		$this->function = ltrim(strtolower($action), "__");
		
		if (empty($this->controller)) { $this->controller = self::DEFAULT_CONTROLLER; }
		if (empty($this->function)) { $this->function = self::DEFAULT_FUNCTION; }
		
		while (count($params)>0) {
			$this->params[array_shift($params)]=array_shift($params);
		}
		if (count($_REQUEST)>0) {
			foreach ($_REQUEST as $var=>$val) {
				$this->params[$var]=$val;
			}
		}
		$this->params=$this->decode($this->params);
	}
	
	/**
	 * urldecode array
	 * @param array $data
	 * @return array
	 */
    private function decode($data) {
        if (!is_array($data)) { return urldecode($data); }
        foreach ($data as $var=>&$val) {
            if (is_array($val)) { $val=$this->decode($val); }
            else {
                $val=urldecode($val);
            }
        }
        return $data;
    }
	public function __get($var) {
		if (isset($this->params[$var])) {
			return $this->params[$var];
		} elseif (isset($this->$var)) { return $this->$var; }
	}
	
	/**
	 * Return all class variables
	 * @return array
	 */
    public function toArray() {
        return $this->params;
    }
}

?>
