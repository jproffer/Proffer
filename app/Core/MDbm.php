<?php
	
	/**
	* DBM manager for MySQL 5
	* Version 1.2
	* @author Johnathan Proffer
	* @Copyright (c) Johnathan Proffer
	* @license http://www.gnu.org/licenses/gpl-3.0.html GNU General Public Licence 
	*/

	namespace Core;
	use	
		\Core\Exceptions\DatabaseException as DE,
		\config\Config;
	
	class MDbm extends \mysqli {

		public $_mysql_errmsg;
		public $_mysql_errcode;
		private static $_mysql_sql = array();
		private static $db = null;
		public $conn;

		public static function getInstance() {
			if (self::$db == null) {
				self::$db = new MDbm();
			}
			return self::$db;
		}

		public function __construct() {
			$this->_mysql_errmsg='';
			$this->_mysql_errcode=0;
			$this->conn = parent::__construct(Config::$DB_CONNECTOR['host'],Config::$DB_CONNECTOR['uid'],Config::$DB_CONNECTOR['pwd'],Config::$DB_CONNECTOR['db'],Config::$DB_CONNECTOR['port']);
			if($this->connect_error) {
				$this->_mysql_errcode = mysqli_connect_errno();
				$this->_mysql_errmsg = mysqli_connect_error();
				$this->PrintError();
			}
			if (!parent::options(MYSQLI_INIT_COMMAND, 'SET AUTOCOMMIT = 1')) { die('Setting MYSQLI_INIT_COMMAND failed'); }	
			if (!parent::options(MYSQLI_OPT_CONNECT_TIMEOUT, 5)) { die('Setting MYSQLI_OPT_CONNECT_TIMEOUT failed'); }	
		}

		public function __destruct() {
		}
		public function __call($name, $arguments) {
			global $TRACE;
			$TRACE[]=__CLASS__."::$name($arguments) - ".get_called_class();
		}

		public function query($sql) {
			
		//$sql =  parent::escape_string($sql);
		self::$_mysql_sql=$sql;
		 $result = parent::query($sql);
		 if ($result==false||!empty($this->error)) {
			$this->_mysql_errcode=mysqli_errno($this);
			$this->_mysql_errmsg=mysqli_error($this);
			$this->PrintError();
		 }
			return $result;
		}
		/**
		 * the functions below are not intended for production.
		 * DO NOT USE!
		 **/
		public function getRow($sql) { return $this->getAll($sql,'one'); }
		public function affected() { return $this->affected_rows; }
		public function getAll($sql,$type='all') {
			self::$_mysql_sql=$sql;
			$result = parent::query($sql);
			if (!$result) {
				 $this->_mysql_errcode=mysqli_errno();
				 $this->_mysql_errmsg=mysqli_error();
				 $this->PrintError();
			}
			$res=array();
			return ($type=='all')?$this->fetch($result):mysqli_fetch_assoc($result);
		}
		/*** end private functions ***/
		
		private function PrintError() {
//			throw new DE("MySQL Error #".mysqli_errno($this).": ".mysqli_error($this));
			$s = print_r(self::$_mysql_sql,true);
			echo "
				<div
					style='
						padding: 5px;
						background-color: #EFEFEF;
						border: solid #888 1px;
									clear: both;
				'>
				SQL Error <strong>{$this->_mysql_errcode}</strong> <br />{$this->_mysql_errmsg}<br /><br /><pre>".$s."</pre>
				</div>
			";
			exit;
		}
		public function lastid() {
			return parent::insert_id();
		}
		public function changedb($newdb) {
			parent::select_db($newdb);
		}
	};

?>
