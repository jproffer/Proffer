<?php

namespace Model\Core;

abstract class Singleton {
	
	protected static $instance = null;
	
	public static function getInstance() {
		if (self::$instance == null) {
			self::$instance = new static();
		}
		return self::$instance;
	}
	
	private function __clone() { }
	
	private function __wakeup() { }
}

?>