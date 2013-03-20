<?php
/**
 * URI Decoder
	* @author Johnathan Proffer
	* @Copyright (c) Johnathan Proffer
	* @license http://www.gnu.org/licenses/gpl-3.0.html GNU General Public Licence 
 **/

namespace Core;

class Uri {
	public function __construct() {
		global $userpath;
		$this->params=array();
		$_request=explode("?",$_SERVER['REQUEST_URI'],2);
		$request=$_request[0];
		$request=explode("/",$request);
		array_shift($request);
		$this->controller = ucwords(strtolower(array_shift($request)));
		$this->function=ltrim(strtolower(array_shift($request)),"__");
		// convert ?key=val&key=val to /key/val/key/val
		if (count($_request)>1) {
			$str=explode("&",$_request[1]);
			$tack=array();
			foreach ($str as $obj) {
				$obj=explode("=",$obj,2);
				$request = array_merge($request, $obj);
			}
		} 
		// first param is our controller, second is the function.  If none are given, then it defaults to class 'Main', function 'index'.
		if (empty($this->controller)) { 
			$this->controller = ($userpath == 'Public') ? 'Main' : 'Admin'; 
		}
		if (empty($this->function)) { $this->function='index'; }
		$this->controller = "Controller\\".$this->controller;
		
		// any other params are broken down into key=value pairs.
		while (count($request)>0) {
			$this->params[array_shift($request)]=array_shift($request);
		}
		if (count($_REQUEST)>0) {
			foreach ($_REQUEST as $var=>$val) {
				$this->params[$var]=$val;
			}
		}
		$this->params=$this->decode($this->params);
	}
	
	/**
	 * recursively urldecode data
	 * @param mixed $data
	 * @return mixed
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
	public function toArray() {
		return $this->params;
	}
}

?>
