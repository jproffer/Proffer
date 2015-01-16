<?php

namespace Controller;

	class Main extends \Core\CAbstract implements \Interfaces\iAbstract {
		
		// define what libraries we use
		public static $jsLibraries = array();
		public function gslib($arr) {
			parent::$jsLibraries = $arr;
		}
		
		public function indexA() {
			$this->addLibrary("slider");
			$this->currentDate = date("c");
			$this->keyWords = "";
		}

		public function __call($name, $arguments) {
			global $TRACE;
			$TRACE[]=__CLASS__."::$name($arguments) - ".get_called_class();
		}
		public function testA() {
			$this->addLibrary("cycle,easing,nivo");

		}
	}
?>
