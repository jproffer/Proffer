<?php

	namespace Controller;

	
	class General extends \Core\CAbstract implements \Interfaces\iAbstract {
		
		// define what libraries we use
		public static $jsLibraries = array();
		public function gslib($arr) {
			parent::$jsLibraries = $arr;
		}
		
		public function index() {
		}

		public function news() {
			
		}

		public function __call($name, $arguments) {
			global $TRACE;
			$TRACE[]=__CLASS__."::$name($arguments) - ".get_called_class();
		}
		public function test() {
			$this->addLibrary("cycle,easing,nivo");

		}
	}
?>