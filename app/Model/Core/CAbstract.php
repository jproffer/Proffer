<?php
namespace Model\Core;

abstract class CAbstract extends \Core\Dbm {
	private $data;
	private $table = null;
	
	public function __construct($row=false) {
		parent::__construct();
		if ($row) {
			foreach ($row as $item=>$value) {
				$this->$item=$value;
			}
		}
	}
	
	public function __get($key) {
		return $this->data[$key];
	}
	public function __set($key, $val) {
		$this->data[$key] = $val;
	}
	
	public function save() {
		if (empty($this->table)) {
			throw new Exception(__CLASS__." missing TABLE value.", \Core\Error::NO_TABLE);
		}
		$fields = "`".implode("`,`", array_keys($this->data))."`";
		array_walk($this->data, mysqli_real_escape_string);
		$values = "'".implode("','",array_values($this->data))."'";
		$sql = "
			insert into {$this->table} ($fields) values ($values)
		";
		$this->query($sql);
	}
}

?>