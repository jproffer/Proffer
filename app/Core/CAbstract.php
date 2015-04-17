<?php
namespace Core;

use \Core\Exceptions,
	\config\Config;

	class CAbstract extends \Core\Dbm  {
		private $_consolemsgs	= [],
				$_css			= [],
				$_js			= [],
				$_csstype		= "screen",
				$view			= [];
		public static $jsLibraries = array();
		private static $_HaveCalledConstructor=false;
		protected static $_vars = array();
		
		protected static $protected = array("_vars","jsLibraries","_csstype","_js","_css","_consolemsgs","config");
		
		protected $config = array(
			"include_css"		=> true,
			"execute"			=> true,
			"include_js"		=> true
		);
		
		public function recursiveinclude($path) {
			$list=glob("$path/*");
			foreach ($list as $what) {
				if (is_dir($what)) { $this->recursiveinclude($what); return; }
				if (preg_match("/\.js$/",$what)) {
					$file=str_replace(PATH_ROOT."/js/","",$what);
					$this->addJS($file);
				}
				elseif (preg_match("/\.css$/",$what)) {
					$file=str_replace(PATH_ROOT."/js/","",$what);
					$this->addCSS($file);
				}
			}
		}
		
		public function __destruct() {
 			global $_GlobalIncludes;
			if (!self::$_HaveCalledConstructor) {
			    throw new \Exception("Whoops!  Seems like ".get_called_class()." doesn't call parent::__construct().", 40002);
			}
            
			if ($this->config['execute']) {
			self::$protected = array_combine(self::$protected,self::$protected);
			foreach ($_GlobalIncludes as $var=>$name) {
			    $this->view[$var]=$name;
			}
			if (isset($_SESSION['user'])) {
			    $this->view['_user']=$_SESSION['user'];
			}
//			$this->view['BASE']=BASEPATH;
			$this->view['themepath']=Config::$themepath;
			if ($this->config['include_js']) {
			    if (!empty(self::$jsLibraries)) {
					$path=PATH_ROOT."/js/plugins/";
					foreach (self::$jsLibraries as $lib) {
						$this->recursiveinclude($path.$lib);
					}
			    }
				if (!empty($this->_js)) {
					$this->view['jsincludes'] = implode("\n", $this->_js);
				}
			    // check if we have any error messages for console.log
			    if (count($this->_consolemsgs)>0) {
					$js="<script type='text/javascript'>";
					foreach ($this->_consolemsgs as $msg) {
						$js.="console.log('$msg');\n";
					}
					$js.="</script>";
					$this->view['jsincludes'].=$js;
			    }
			}
			if ($this->config['include_css']) {
			    $css="<style type='text/css' media='{$this->_csstype}' charset='utf-8'>";
			    for ($i=0; $i<count($this->_css); $i++) {
				$css.="@import url('{$this->_css[$i]}');\n";
			    }
			    $css.="</style>";
			    $this->view['cssincludes']=$css;
			}
			foreach (self::$_vars as $var=>$val) {
			    $this->view[$var]=$val;
			}
//			$this->view['content'] = "{$this->uri->controller}/{$this->uri->function}.html";
			    $twig = new \library\Template();
			    $twig->generate("{$this->uri->controller}/{$this->uri->function}", $this->view);
			}
			parent::__destruct();
		}
		
		protected function _setCSSStyle($type="screen") {
			$this->_csstype=$type;
		}
		protected function CheckAuth() {
            $pub = array("Controller\\Auth","Controller\\Main", "Controller\\Get", "Controller\\Poll", "Controller\\App","Controller\\Help","Controller\\General","Controller\\Accounts");
            if (!isset($_SESSION['user'])) {
                if (!in_array(get_called_class(),$pub)) {
                    header("Location:/auth/login/",true,301);
                }
            }
        }
	public function __construct(\Core\Uri $uri=null) {
		self::$_HaveCalledConstructor = true;
		self::CheckInterface(get_called_class());
        self::CheckAuth();

			parent::__construct();
			$this->uri=$uri;
			if ($this->config['include_js']) {
				$this->addJS("jquery.js");
				$this->addJS("jqueryui.js");
				$this->addJS("http://code.jquery.com/jquery-migrate-1.2.1.js", true);
				
				if (file_exists(PATH_ROOT."/js/Includes/".Config::$userpath."/{$uri->controller}/{$uri->function}.js")) {
					$this->addJS(PATH_WWW."/get/js/name/".Config::$userpath."_{$uri->controller}_{$uri->function}",true);
				}
			}
			if ($this->config['include_css']) {
                
				// check our theme path for any css marked for inclusion (prepended by "inc_").
				$files=glob(PATH_ROOT.Config::$themepath."/inc_*.css");
				if (count($files)>0) {	// add any that are found, to our css array
					foreach ($files as $file) {
                        if (is_file($file)) {
                            $this->addCSS(basename($file));
                        }
					}
				}
				if (file_exists(PATH_ROOT.Config::$themepath."/".Config::$userpath."/{$uri->controller}/{$uri->function}.css")) {
					 $crc32=crc32(file_get_contents(PATH_ROOT.Config::$themepath."/{$uri->controller}/{$uri->function}.css"));
					$this->addCSS(PATH_WWW."/get/css/name/".Config::$userpath."_{$uri->controller}_{$uri->function}/hash/$crc32",true);
				}
			}
		}
		
		private static function CheckInterface($class) {
			$iClass = new \ReflectionClass($class);
			if (!$iClass->implementsInterface('\Interfaces\iAbstract')) {
				throw new \Core\Exceptions\InterfaceException(get_called_class()." must implement interface \Interfaces\iAbstract!",1000);
			}
		}
		
		protected function addLESS($path) {
			if (file_exists(PATH_ROOT.Config::$themepath."/".$path)) {
                $crc32=crc32(file_get_contents(PATH_ROOT.Config::$themepath."/".$path));
				$this->_less[]=PATH_WWW.Config::$themepath."/$path?$crc32";
			} else {
				$this->_consolemsgs[]="CTK_CSS: could not find ".PATH_WWW.Config::$themepath."/".$path;
			}
		}
		protected function addCSS($path,$external=false) {
			if ($external) { $this->_css[]=$path; return; }
			if (file_exists(PATH_ROOT.Config::$themepath."/".$path)) {
                $crc32=crc32(file_get_contents(PATH_ROOT.Config::$themepath."/".$path));
				$this->_css[]=PATH_WWW.Config::$themepath."/$path?$crc32";
			} else {
				$this->_consolemsgs[]="CTK_CSS: could not find ".PATH_WWW.Config::$themepath."/".$path;
			}
		}
		protected function addLibrary($elements,$IEOnly=false) {
			$elements=preg_split("/[\,\;\s]/",$elements,-1,PREG_SPLIT_NO_EMPTY);
			if (count($elements)>0) {
				foreach ($elements as $element) {
					if (file_exists(PATH_ROOT."/js/plugins/jquery-$element.js")) {
						$this->addJS("plugins/jquery-$element.js",$IEOnly);
					} else {
						$this->addJS("plugins/$element.js",$IEOnly);
					}
				}
			}
		}
		protected function addJS($path, $external=false, $IEOnly=false) {
			$ies=$iee="";
			if ($IEOnly) {
				$ies="<!--[if IE]>";
				$iee="<![endif]-->";
			}
			if ($external) {
				@$this->_js[] = "{$ies}<script type='text/javascript' src='$path'></script>{$iee}\n"; return;
			}
			if (file_exists(PATH_ROOT."/js/".$path)) {
                $crc32=crc32(file_get_contents(PATH_ROOT."/js/".$path));
				@$this->_js[] = "{$ies}<script type='text/javascript' src='".PATH_WWW."/js/$path?$crc32'></script>{$iee}\n";
			} else {
				@$this->_js[] = "<script type='text/javascript'>console.log('CTK_JS: could not find \"$path\"');</script>\n";
			}
		}
		public function __get($key) {
			return (isset(self::$_vars[$key]))?self::$_vars[$key]:false;
		}
		public function __set($key,$value) {
            
			self::$_vars[$key]=$value;
		}
		public function toArray() {
			return self::$_vars;
		}
		
		public function noexec() {
			$this->config['execute']=false;
		}
		
	}

?>
