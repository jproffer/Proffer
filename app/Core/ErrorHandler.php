<?php
/**
	* Error handler.
	* @author Johnathan Proffer
	* @Copyright (c) Johnathan Proffer
	* @license http://www.gnu.org/licenses/gpl-3.0.html GNU General Public Licence 
	* @todo: This kind of sucks.  Redo! 
 */
namespace Core;
	use library\FB;
	
	class ErrorHandler {

		private $UseFireBug	= true;
		
		private $config = array(
			"args"	=> false,
			"_ENV"	=> false,
			"_GET"		=> false,
			"_POST"	=> false,
			"_FILES"	=> false,
			"_SERVER"	=> false,
			"_COOKIE"	=> false,
			"_REQUEST"	=> false,
			"HTTP_GET_VARS" 	=> false,
			"HTTP_ENV_VARS" 	=> false,
			"HTTP_POST_VARS"	=> false,
			"HTTP_POST_FILES" 	=> false,
			"HTTP_COOKIE_VARS"	=> false,
		);
		
		private $exclude_codes = array();
		private $exclude_objects = array();
		
		private $codes = array(
			"error" => array(
	'color'	=> "#FFDFDF",
	'border' => "#880000",
	1			=> "E_ERROR",
	4			=> "E_PARSE",
	16		=> "E_CORE_ERROR",
	64		=> "E_COMPILE_ERROR",
	256		=> "E_USER_ERROR",
	2048 	=> "E_STRICT",
	30719	=> "E_ALL"
			),
			"notice" => array(
	'color'	=> "#BEFFAD",
	'border' => "#5EEB3B",
	8			=> "E_NOTICE",
	1024	=> "E_USER_NOTICE"
			),
			"warning" => array(
	'color'	=> "#B8BEFF",
	'border' => "#6B77FA",
	2	=> "E_WARNING",
	32 		=> "E_CORE_WARNING",
	128		=> "E_COMPILE_WARNING",
	512		=> "E_USER_WARNING",
	4096	=> "E_RECOVERABLE_ERROR",
	8192 	=> "E_DEPRECATED",
	16384 	=> "E_USER_DEPRECATED",
			)
		);
		private $trace = array();
		public function __construct() {
			global $TRACE;
			$TRACE[]="((".__CLASS__."::".__FUNCTION__." [".__LINE__."] - ".get_called_class()."))";
			$this->ignoreObject(get_class($this),true);
			set_error_handler(array($this,"handler"),E_ALL & ~E_NOTICE);
		}
		public function __destruct() {
			if (count($this->trace)>0) {
	if (!$this->UseFireBug) { echo "<div style='overflow: hidden; display: block; clear: both;'>"; }
		foreach ($this->trace as $trace) {
			
			if ($this->UseFireBug) {  FB::error($trace,$trace['etype']); }
			else {
				echo "
		<div style='font-weight: normal; font-size: 12px; font-family: serif; padding: 2px; margin-top: 4px; background-color: {$trace['a']}; border: solid {$trace['b']} 1px; overflow: hidden;'>
			<B>{$trace['etype']}: {$trace['msg']}</b><br />
			<table cellpadding='2' cellspacing='0' border='1' style='width: 100%; border: solid #DFDFDF 1px; border-width: 1px; border-collapse: collapse; background-color: #FFEFEF; font-weight: normal; font-size: 12px; font-family: serif;'>".implode(" ",$trace['path'])."</table>
				";
				if (count($trace['stack'])>0) {
		echo "
				<div style='background-color: #EFEFEF;'>
					<pre>".print_r($trace['stack'],true)."</pre>
				</div>
			</div>
		";
				}
				echo "</div>";
			}
		}
		if (!$this->UseFireBug) { echo "</div>"; }
			}
		}
		public function set() {
			global $TRACE;
			$TRACE[]=__CLASS__."::".__FUNCTION__." [".__LINE__."] - ".get_called_class();
			$nargs = func_num_args();
			if ($nargs==0) { return; }
			$args = func_get_args();
			$arr=array();
			while (($item=array_shift($args))!=null) {
	// if the current item is a boolean value, apply it to whatever's in our array
	if (gettype($item)==bool) {
		if (count($arr)==0) { continue; }
		// then apply our key/value pairs to the global config array
		foreach ($arr as $var) { $this->config[$var]=$item; }
		unset($arr); $arr = array(); // empty local array to start over
	} else {
		$arr[]=$item;
	}
			}
			// if anything is left in our array, we assume "false" (default).
			if (count($arr)>0) {
	foreach ($arr as $var) { $this->config[$var]=false; }
			}
			$this->config[$var]=$val;
		}
		public function ignoreObject($var, $val) {
			$this->exclude_objects[$var]=$val;
		}
		public function get($var) {
			return $this->config[$var];
		}
		
		public function handler($errno,$errstr,$errfile,$errline, $errortext) {
			$count=count($this->trace);
			$this->trace[$count]['msg']=$errstr;
			$trace = $this->getdebugtext();
			
			$this->trace[$count]['path']=$trace[0];
			$this->trace[$count]['stack']=$trace[1];
			foreach ($this->codes as $type=>$code) {
				if (isset($code[$errno])) {
					$this->trace[$count]['etype']=strtoupper($type);
					$this->trace[$count]['a']=$code['color'];
					$this->trace[$count]['b']=$code['border'];
					break;
				}
			}
			$this->trace[$count]['type']=(isset($this->error_codes[$errno]))?$this->error_codes[$errno]:$errno; //$this->warning_codes[$errno];
			// prevent PHP internal handler from continuing parse of error
			return true;
		}
		private function getdebugtext($data=false) {
			if (!$data) { $data=debug_backtrace(); }
			while ($data[0]['class']==get_class($this)) { array_shift($data); }
			$debug = array();
			$toprint=array();
			foreach ($data as $item) {
	$debug[]="
		<tr>
			<td>{$item['class']}{$item['type']}{$item['function']}</td>
			<td>{$item['file']} line <b>{$item['line']}</td>
		</tr>
	";
	
	unset($item['class']); unset($item['function']); unset($item['file']); unset($item['line']); unset($item['args']); unset($item['type']);
	foreach ($item as $type=>$var) {
		if (
			// we have a class object or other object.  check our objects array and make sure
			// we have something the user wants displayed.
			($type=="object" && @$this->exclude_objects[get_class($var)]!==true)
			||($type!="object" && $this->config[$type]!==false)
		) {
			$toprint[$type]=$var;
		}
	}
			}
			$debug = array_map("strip_tags", $debug);
			return array($debug,$toprint);
		}
	}
	$errorHandler = new ErrorHandler();
	$errorHandler->ignoreObject("Core_Dbm",true);
?>  
