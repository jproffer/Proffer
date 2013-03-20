scite<?php
	namespace Controller;
	
	class Main extends \Core\MAbstract implements \Interfaces\iAbstract {
		
		protected $config = array(
			"include_css"	=>true,
			"include_js"	=>true,
			"execute"		=>true
		);
		
		/**
		 * Default app entry point
		 */
		public function indexA() {
			// our page uses 'Colorbox' and 'Migrate' jquery plugins
			$this->addLibrary("colorbox,migrate"); 
		
			// Give me something to do!
		}
		
		public function NoRenderFunctionA() {
			// this is an ajax call, for example, and we only want to return JSON.
			// so tell our abstract class not to execute a template
			$this->noexec();
			header("content-type: text/json");
			
			$data = ["w00t"];
			echo json_encode($data);
		}
	}
?>