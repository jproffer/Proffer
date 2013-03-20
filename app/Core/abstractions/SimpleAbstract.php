<?php
/**
	* Core abstract class.  Extends MySQLi
	* @author Johnathan Proffer
	* @Copyright (c) Johnathan Proffer
	* @license http://www.gnu.org/licenses/gpl-3.0.html GNU General Public Licence 
 */
	namespace Core\abstractions;
	
	use		Core\Exceptions\InterfaceException,
			Core\MasterAbstract,
			Core\Mobile;
	
	static $__CORE_ABSTRACT_CONSTRUCTOR = false;
	
	class SimpleAbstract {
		
		use MasterAbstract {
			MasterAbstract::__construct as private __masterConstruct;
			MasterAbstract::__destruct as private __masterDestruct;
		}
		
		public function __construct(\Core\Uri $uri=null) {
			$this->__masterConstruct($uri);
		}
		public function __destruct() {
			$this->__masterDestruct();
		}
	}


?>
