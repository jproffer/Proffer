<?php
	/**
	 * Core abstract class.  Extends Mongo. Most classes extend from this class.
	* @author Johnathan Proffer
	* @Copyright (c) Johnathan Proffer
	* @license http://www.gnu.org/licenses/gpl-3.0.html GNU General Public Licence 
	 */
	namespace Core;
	
	use		Core\Exceptions\InterfaceException,
			Core\Mobile,
			Core\MasterAbstract;
	
	static $__CORE_ABSTRACT_CONSTRUCTOR = false;
	class GAbstract extends GDbm  {
		
		use MasterAbstract {
			MasterAbstract::__construct as private __masterConstruct;
			MasterAbstract::__destruct as private __masterDestruct;
		}
		
		public function __construct(\Core\Uri $uri=null) {
			$this->__masterConstruct($uri);
			parent::__construct();
		}
		public function __destruct() {
			$this->__masterDestruct();
			parent::__destruct();
		}
	}

?>
