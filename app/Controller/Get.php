<?php
	
	namespace Controller;
	/**
	 * GET class used by ajax routines
	 * @author Johnathan Proffer
	 */
	

	class Get extends \Core\MAbstract implements \Interfaces\iAbstract {
		protected $config = array(
			"include_css"	=>false,
			"include_js"		=>false,
			"execute"			=>false
		);
		
		/**
		 * dynamic css passthrough
		 * @global array $TRACE
		 * @global string $themepath 
		 */
		public function cssA() {
			global $themepath;
			$name=str_replace("_","/",$this->uri->name);
			if (file_exists(PATH_ROOT."$themepath/$name.css")) { 
				header("content-type: text/css");
				try {
					$fp=fopen(PATH_ROOT."$themepath/$name.css", 'r');
					echo stream_get_contents($fp);
				} catch (Exception $e) { }
				@fclose($fp);
			}
			exit;
		}
		
		/**
		 * dynamic js passthrough
		 * @global array $TRACE 
		 */
		public function jsA() {
			$name=str_replace("_","/",$this->uri->name);
			if (file_exists(PATH_ROOT."/js/Includes/$name.js")) {  {
				header("content-type: text/javascript");
				try {
					$fp=fopen(PATH_ROOT."/js/Includes/$name.js", 'r'); 
					echo stream_get_contents($fp);
				} catch (Exception $e) { }
				@fclose($fp);
			}
			exit;
		}
		/**
		 * dialog renderer (used by ajax functions)
		 */
		public function dialogA() {
			$dialog=str_replace("_","/",$this->uri->name);
			$smarty = new \library\Template();
			$smarty->generate("dialogs/$dialog",$this->uri);
		}
		
	}
?>