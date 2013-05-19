<?php
/**
	* Core master abstract class.
	* @author Johnathan Proffer
	* @Copyright (c) Johnathan Proffer
	* @license http://www.gnu.org/licenses/gpl-3.0.html GNU General Public Licence 
 */

	namespace Core;
	use		Core\Exceptions\InterfaceException,
			Core\Mobile,
			\library\FB,
			\library\lessc;

	class MasterAbstract {
		private $_consolemsgs=array();
		private $_css=array();
		private $_iecss = array();
		private $_js=array();
		private $_csstype="screen";
		private $view = array();
		
		public static $jsLibraries = array();
		private static $_HaveCalledConstructor=false;
		protected static $_vars = array();
		protected static $dbm = null;
		
		protected static $protected = array("_vars","jsLibraries","_csstype","_js","_css","_consolemsgs","config");
		
		protected $config = array(
			"include_css"	=> true,
			"execute"		=> true,
			"include_js"	=> true
		);
		
		/**
		 * Recursively include js files relative to $path.
		 * @param string $path
		 */
		public function recursiveinclude($path) {
			$list=glob("$path/*");
			foreach ($list as $what) {
				if (is_dir($what)) { $this->recursiveinclude($what); return; }
				if (preg_match("/\.js$/",$what)) {
					$file=str_replace(PATH_ROOT."/js/","",$what);
					$this->addJS($file);
				} elseif (preg_match("/\.css$/",$what)) {
					$file=str_replace(PATH_ROOT."/css/","",$what);
					$this->addCSS($file);
				}
			}
		}
		
		/**
		 * This is where our rendering magic occurs.
		 * @global string $themepath
		 * @global array $_GlobalIncludes
		 * @global boolean $__CORE_ABSTRACT_CONSTRUCTOR 
		 */
		public function __destruct() {
			global $themepath, $_GlobalIncludes, $__CORE_ABSTRACT_CONSTRUCTOR ;
			global $userpath;
			if (!$__CORE_ABSTRACT_CONSTRUCTOR ) {
				throw new Core_Abstract_Exception(100,"Whoops!  Seems like ".get_called_class()." doesn't call parent::__construct().");
				exit;
			}
			$u = Sessions::getCurrentUser();
			if ($this->config['execute']) {

				foreach ($_GlobalIncludes as $var=>$name) {
					$this->view[$var]=$name;
				}
				if (isset($u)) {
					$this->view['_user']=$u;
				}
				//$this->view['BASE']=BASEPATH;
				$this->view['themepath']=$themepath;
				$cont = str_replace("Controller\\", "", $this->uri->controller);
				if (file_exists(PATH_ROOT."/js/Includes/{$userpath}/$cont/{$this->uri->function}.js")) {
					$this->addJS("/get/js/name/{$userpath}_{$cont}_{$this->uri->function}",true);
				}
				if ($this->config['include_js']) {
					// check if we have any error messages for console.log
					if (count($this->_consolemsgs)>0) {
					$js="<script type='text/javascript'>";
					foreach ($this->_consolemsgs as $msg) {
						$js.="console.log('$msg');\n";
					}
					$js.="</script>";
					$this->view['jsincludes'].=$js;
					}
					if (!empty(self::$jsLibraries)) {
						$path=PATH_ROOT."/js/plugins/".JSLIB."/";
						foreach (self::$jsLibraries as $lib) {
							$this->recursiveinclude($path.$lib);
						}
					}
				}
				if ($this->config['include_css']) {
					$css="<style type='text/css' media='{$this->_csstype}' charset='utf-8'>";
					for ($i=0; $i<count($this->_css); $i++) {
						$css.="@import url('{$this->_css[$i]}');\n";
					}
					if (!empty($this->_iecss)) {
						// IE css styles
						$css.="<!--[if IE]>\n";
						for ($i=0; $i<count($this->_iecss); $i++) {
							$css.="@import url('{$this->_iecss[$i]}');\n";
						}
						$css.="<![endif]-->";
					}
					$css.="</style>";
					$this->view['cssincludes']=$css;
				}

				foreach (self::$_vars as $var=>$val) {
					$this->view[$var]=$val;
				}
				$smarty = new \library\Template();
				$_cont = explode("\\",$this->uri->controller);
				$ControlTemplate = array_pop($_cont); // doing array_pop(explode()) triggers php strict pass-var error
				$smarty->generate("$ControlTemplate/{$this->uri->function}",$this->view);
			}
		}
		
		/**
		 * Set the css render type. Defaults to 'screen'
		 * @param string $type 
		 */
		protected function _setCSSStyle($type="screen") {
			$this->_csstype=$type;
		}
		
		/**
		 * Validate user anytime they try to access something.
		 * If they attempt to access a restricted area and they are not logged in, automatically redirect to login page.
		 */
		protected function CheckAuth() {
			// a list of "public" classes that can be accessed without being logged in.
			global $PUBLIC_CONTROLLERS;
			if (get_called_class() == 'Controller\Api') { return; }
			$user = $_SESSION['user'];
			if (!isset($user)) {
				if (in_array(get_called_class(),$PUBLIC_CONTROLLERS) === false) {
					header("Location:/auth/login/",true,301);
					exit;
				}
			}
		}
		
		/**
		 * Check that subclasses do not override any MasterAbstract vars
		 * 
		 * @param \ReflectionClass $cls
		 * @todo: finish
		 */
		private function CheckProtectedVars($cls) {
			self::$protected = array_combine(self::$protected,self::$protected);
			$cls = new \ReflectionClass($cls);
			$vars = $cls->getProperties(\ReflectionProperty::IS_PUBLIC | \ReflectionProperty::IS_PROTECTED);
		}
		
		public function __wakeup() {
			if (self::$dbm == null) { 
				self::$dbm = MDbm::getInstance();
			}
		}
		
		public function __construct(\Core\Uri $uri=null, $noauth=false) {
			global $__CORE_ABSTRACT_CONSTRUCTOR;
			$__CORE_ABSTRACT_CONSTRUCTOR = true;
			$calledClass = get_called_class();
			if (self::$dbm == null) { 
				self::$dbm = MDbm::getInstance();
			}
			self::CheckInterface($calledClass);
			self::CheckProtectedVars($calledClass);
			if (!$noauth) {
				self::CheckAuth();
			}
			global	$TRACE, $themepath, $userpath;
		
			$this->uri=$uri;
			if ($this->config['include_js']) {
				switch (JSLIB) {
					case 'jquery': {
						$this->addJS('jquery.js');
						$this->addJS('jqueryui.js');
						$this->addJS('touchpunch.js');
						break;
					}
					case 'mootools': {
						$this->addJS('mootools.js');
						break;
					}
					case 'rightjs': {
						break;
					}
				}
//				$cont = str_replace("Controller\\", "", $uri->controller);
//				if (file_exists(PATH_ROOT."/js/Includes/{$userpath}/$cont/{$uri->function}.js")) {
//					$this->addJS(PATH_WWW."/get/js/name/{$userpath}_{$cont}_{$uri->function}",true);
//				}
			}
			if ($this->config['include_css']) {
	
				// check our theme path for any css marked for inclusion (prepended by "inc_").
				$files=glob(PATH_ROOT."$themepath/inc_*.css");
				if (count($files)>0) {	// add any that are found, to our css array
					foreach ($files as $file) {
						if (is_file($file)) {
							$this->addCSS(basename($file));
						}
					}
				}
				/**
				 * Possibly v2.0 caching
				 * @todo: possibly use this in place of on the fly lessCSS compilation
				 */
//				// load precompiled lessCSS files
//				$files=glob(PATH_ROOT_CACHE."/css/*.css");
//				if (count($files)>0) {	// add any that are found, to our css array
//					foreach ($files as $file) {
//						if (is_file($file)) {
//							$file = basename($file);
//							$this->addCSS("/cache/css/$file",true);
//						}
//					}
//				}
	
					/**
					 * @todo: Add caching
					 * Removed 1.1.13 - until we come up with a caching/compile process, it has no benefit over a manual commandline script
					 * re-added 1.22.13
					 */
					$files=glob(PATH_ROOT."$themepath/inc_*.less");
					foreach ($files as $file) {
						$compilePath=PATH_ROOT_CACHE."/css/";
						$compileFile = explode(".",basename($file),2);
						$compileFile = $compileFile[0].".css";
						$outfile = PATH_ROOT_CACHE."/css/$compileFile";
						if (file_exists($outfile)) {
							unlink($outfile);
						}
						if (!is_readable($file)) {
							throw new Exception("Unable to read $file");
						}
						lessc::ccompile($file, $outfile);
						$file = "/cache/css/$compileFile";
						
						$this->addCSS($file,true);
					}
	
				if (file_exists(PATH_ROOT."$themepath/ie.css")) {
					$this->addCSS("ie.css",false, true);
				}
				$cont = str_replace("Controller\\", "", $uri->controller);
				if (file_exists(PATH_ROOT."$themepath/{$userpath}/$cont/{$uri->function}.css")) {
					 $crc32=crc32(file_get_contents(PATH_ROOT."$themepath/{$userpath}/$cont/{$uri->function}.css"));
					$this->addCSS("/get/css/name/{$userpath}_{$cont}_{$uri->function}/hash/$crc32",true);
				}
			}
		}
		
		/**
		 * All classes must implement Interfaces_iAbstract. Throw an error if they do not
		 * @param object $class 
		 */
		private static function CheckInterface($class) {
			$iClass = new \ReflectionClass($class);
			if (!$iClass->implementsInterface('\Interfaces\iAbstract')) {
				throw new InterfaceException(get_called_class()." must implement interface Interfaces_iAbstract!",1000);
			}
		}
		
		/**
		 * load CSS files
		 * @global string $themepath
		 * @param string $path
		 * @param bool $external
		 * @param bool $IEOnly
		 */
		protected function addCSS($path,$external=false, $IEOnly=false) {
			global $themepath;
			$ies=$iee="";
			$_cssType = ($IEOnly===true)?"_iecss":"_css";
			if ($external) { $this->_css[]=$path; return; }
			if (file_exists(PATH_ROOT."$themepath/".$path)) {
				$crc32=crc32(file_get_contents(PATH_ROOT."$themepath/".$path));
				$this->{$_cssType}[]="$themepath/$path?$crc32";
			} else {
				$this->_consolemsgs[]="CSS: could not find ".PATH_WWW."/$themepath/".$path;
			}
		}
		
		/**
		 * Load library components using one line of code
		 * @example addLibrary("slider,easing,checkboxes")
		 * @param string $elements
		 * @param bool $IEOnly 
		 */
		protected function addLibrary($elements,$IEOnly=false) {
			global $themepath;
			$elements=preg_split("/[\,\;\s]/",$elements,-1,PREG_SPLIT_NO_EMPTY);
			if (count($elements)>0) {
				foreach ($elements as $element) {
					if (!is_dir(PATH_ROOT."/js/plugins/".JSLIB."/$element")) {
						if (file_exists(PATH_ROOT."/js/plugins/".JSLIB."/$element.js")) {
							$this->addJS("plugins/".JSLIB."/$element.js",$IEOnly);
						} else {
							$this->addJS("plugins/$element.js",$IEOnly);
						}
					} else {
						$files = glob(PATH_ROOT."/js/plugins/".JSLIB."/$element/*.js");
						foreach ($files as $file) {
							$_path = "$element/".basename($file);
							$this->addJS("plugins/".JSLIB."/$_path", $IEOnly);
						}
					}
					if (file_exists(PATH_ROOT."$themepath/plugins/$element.css")) {
						$this->addCSS("plugins/$element.css");
					} elseif (is_dir(PATH_ROOT."$themepath/plugins/$element")) {
						$files = glob(PATH_ROOT."$themepath/plugins/$element/*.css");
						foreach ($files as $file) {
							$_path = "$element/".basename($file);
							$this->addCSS("plugins/$_path", $IEOnly);
						}
					}
				}
			}
		}
		
		/**
		 * Add js libraries.  If $external is set to true, then no checks are done
		 * @param string $path
		 * @param bool $external
		 * @param bool $IEOnly 
		 */
		protected function addJS($path, $external=false, $IEOnly=false) {
			$ies=$iee="";
			if ($IEOnly) {
				$ies="<!--[if IE]>";
				$iee="<![endif]-->";
			}
			if ($external) {
				@$this->view['jsincludes'].="{$ies}<script type='text/javascript' src='$path'></script>{$iee}\n"; 
				return;
			}
			if (file_exists(PATH_ROOT."/js/".$path)) {
				// @todo: improve caching and cache busting
				$crc32=crc32(file_get_contents(PATH_ROOT."/js/".$path));
				@$this->view['jsincludes'].="{$ies}<script type='text/javascript' src='/js/$path?$crc32'></script>{$iee}\n";
						} else {
				@$this->view['jsincludes'].="<script type='text/javascript'>console.log('CTK_JS: could not find \"$path\"');</script>\n";
			}
		}
		
		public function __get($key) {
			return (isset(self::$_vars[$key]))?self::$_vars[$key]:false;
		}
		
		public function __set($key,$value) {			
			self::$_vars[$key]=$value;
		}
		
		public function toArray() {
			$_tmp = self::$_vars;
			unset($_tmp['orm']);
			unset($_tmp['table']);
			return $_tmp;
		}
		
		/**
		 * Tells us whether or not to build js/css and template.
		 * Example of this being set to false, would be execution of ajax functions
		 */
		public function noexec() {
			$this->config['execute']=false;
		}
		
		/**
		 * Just used for trace.  
		 * @todo: evaluate usefulness vs memory consumption
		 * @global array $TRACE
		 * @param string $name
		 * @param array $arguments 
		 */
		public function __call($name, $arguments) {
			global $TRACE;
			$TRACE[]=__CLASS__."::$name($arguments) - ".get_called_class();
		}
}

?>
