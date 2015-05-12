<?php
/**
	* Model abstract class.
	* @author Johnathan Proffer
	* @Copyright (c) Johnathan Proffer
	* @license http://www.gnu.org/licenses/gpl-3.0.html GNU General Public Licence 
 */

namespace Model\Core;

abstract class ModelAbstract {
	
	protected	$table = null,
				$id = null,
				$key="id";
	
	protected	$data = [];
	
	protected	$orm = [];
	
	protected static $dbm;
	
	
	public function __construct($row=false) {
		self::$dbm = \Core\MDbm::getInstance();
		if ($this->table == null) {
			throw new Exception("Must define table name in model instance.");
		}
		if (!empty($row)) {
			$_keys = array_keys($this->orm);
			foreach ($row as $key=>$val) {
				if (in_array($key, $_keys)) {
					$this->data[$key]=$val;
				} elseif ($key == $this->key) {
					// assign id value
					$this->id = $val;
				}
			}
		}
	}
	
	
	protected function fetch($id) {
		$sql = "
			select * from {$this->table} where {$this->key} = ?
		";
		$stmt = self::$dbm->prepare($sql);
		if (!$stmt) { echo "error with $sql: <pre>"; print_r($stmt); exit; }
		$stmt->bind_param("i", $id);
		$stmt->execute();
		$res = $stmt->get_result();
		if (mysqli_num_rows($res) == 0) { return false; }
		$row=mysqli_fetch_assoc($res);
		return $row;
	}
	
	/**
	 * Save or update record
	 */
	public function save() {
		if (!empty($this->id)) {
			// this is not a new record.  Update values
			$sql = "update {$this->table} set ";
			$mapItems = array();
			$bindvarTypes = "";
			$bindvalues = array();
			foreach ($this->orm as $map=>$type) {
				$mapItems[]="`$map`=?";
				$bindvarTypes .= $type;
				$bindvalues[] = $this->data[$map];
			}
			$bindvalues[]=$this->id;
			$bindvarTypes .= "d";
			$params = array_merge(array($bindvarTypes), $bindvalues);
			$sql .= implode(",",$mapItems);
			$sql .= " where {$this->key} = ?";
			$stmt = self::$dbm->prepare($sql);
			if (!$stmt) { echo "error with $sql"; exit; }
			
			call_user_func_array(array(&$stmt, 'bind_param'), $this->makeValuesReferenced($params));
			$stmt->execute();
		} else {
			// new record.  Perform an insert instead.
			$map = array();
			for ($i=0; $i<count($this->orm); $i++) {
				$map[]="?";
			}
			$map=implode(",", $map);
			$bindfields = array();
			$bindvarTypes = "";
			$bindvalues = array();
			foreach ($this->orm as $gmap=>$type) {
				$bindfields[] = $gmap;
				$bindvarTypes .= $type;
				$bindvalues[] = $this->data[$gmap];
			}
			$sql = "insert into {$this->table} (`".implode("`,`", $bindfields)."`) values ($map)";
			$params = array_merge(array($bindvarTypes), $bindvalues);
			$stmt = self::$dbm->prepare($sql);
			if (!$stmt) { echo "error with $sql: {self::$dbm->error}"; exit; }
			
			call_user_func_array(array(&$stmt, 'bind_param'), $this->makeValuesReferenced($params));
			$stmt->execute();
			if ($stmt->error != '') {
				throw new \Exception("STMT Error: {$stmt->error}");
				exit;
			}
			return $stmt->insert_id;
		}
	}
	function makeValuesReferenced($arr){
		$refs = array();
		foreach($arr as $key => $value)
			$refs[$key] = &$arr[$key];
		return $refs;
	}
	public function __get($key) { return $this->data[$key]; }
	public function __set($key,$value) { $this->data[$key]=$value; }
		
	public function toArray() {
		$arr= array();
		foreach ($this as $obj=>$val) {
			$arr[$obj]=$val;
		}
		return $arr;
	}
}

?>
