<?php
	
	/**
	* DBM manager for MySQL 5
	* Version 1.2
	* @author Johnathan Proffer
	* @Copyright (c) Johnathan Proffer
	* @license http://www.gnu.org/licenses/gpl-3.0.html GNU General Public Licence 
	*/

	namespace Core;
	use		Core\Exceptions\DatabaseException as DE;
	
	class MDbm extends \mysqli {

		public $_mysql_errmsg;
		public $_mysql_errcode;
		private static $_mysql_sql = array();
		public $conn;

	/**
	 * Array for converting MYSQLI_*_FLAG constants to text values
	 * @var	array
	 * @access public
	 * @since  Property available since Release 1.6.5
	 */
	protected $mysqli_flags = array(
		MYSQLI_NOT_NULL_FLAG		=> 'not_null',
		MYSQLI_PRI_KEY_FLAG			=> 'primary_key',
		MYSQLI_UNIQUE_KEY_FLAG		=> 'unique_key',
		MYSQLI_MULTIPLE_KEY_FLAG	=> 'multiple_key',
		MYSQLI_BLOB_FLAG			=> 'blob',
		MYSQLI_UNSIGNED_FLAG		=> 'unsigned',
		MYSQLI_ZEROFILL_FLAG		=> 'zerofill',
		MYSQLI_AUTO_INCREMENT_FLAG	=> 'auto_increment',
		MYSQLI_TIMESTAMP_FLAG		=> 'timestamp',
		MYSQLI_SET_FLAG				=> 'set',
		// MYSQLI_NUM_FLAG			 => 'numeric',  // unnecessary
		// MYSQLI_PART_KEY_FLAG		=> 'multiple_key',  // duplicatvie
		MYSQLI_GROUP_FLAG			=> 'group_by'
	);

	/**
	 * Array for converting MYSQLI_TYPE_* constants to text values
	 * @var	array
	 * @access public
	 * @since  Property available since Release 1.6.5
	 */
	protected $mysqli_types = array(
		MYSQLI_TYPE_DECIMAL	 => 'decimal',
		MYSQLI_TYPE_TINY		=> 'tinyint',
		MYSQLI_TYPE_SHORT	   => 'int',
		MYSQLI_TYPE_LONG		=> 'int',
		MYSQLI_TYPE_FLOAT	   => 'float',
		MYSQLI_TYPE_DOUBLE	  => 'double',
		// MYSQLI_TYPE_NULL		=> 'DEFAULT NULL',  // let flags handle it
		MYSQLI_TYPE_TIMESTAMP   => 'timestamp',
		MYSQLI_TYPE_LONGLONG	=> 'bigint',
		MYSQLI_TYPE_INT24	   => 'mediumint',
		MYSQLI_TYPE_DATE		=> 'date',
		MYSQLI_TYPE_TIME		=> 'time',
		MYSQLI_TYPE_DATETIME	=> 'datetime',
		MYSQLI_TYPE_YEAR		=> 'year',
		MYSQLI_TYPE_NEWDATE	 => 'date',
		MYSQLI_TYPE_ENUM		=> 'enum',
		MYSQLI_TYPE_SET		 => 'set',
		MYSQLI_TYPE_TINY_BLOB   => 'tinyblob',
		MYSQLI_TYPE_MEDIUM_BLOB => 'mediumblob',
		MYSQLI_TYPE_LONG_BLOB   => 'longblob',
		MYSQLI_TYPE_BLOB		=> 'blob',
		MYSQLI_TYPE_VAR_STRING  => 'varchar',
		MYSQLI_TYPE_STRING	  => 'char',
		MYSQLI_TYPE_GEOMETRY	=> 'geometry',
		/* These constants are conditionally compiled in ext/mysqli, so we'll
		 * define them by number rather than constant. */
		16					  => 'bit',
		246					 => 'decimal',
	);


		public function __construct() {
			global $DB_CONNECTOR;
			$this->_mysql_errmsg='';
			$this->_mysql_errcode=0;
			$this->conn = parent::__construct($DB_CONNECTOR['host'],$DB_CONNECTOR['uid'],$DB_CONNECTOR['pwd'],$DB_CONNECTOR['db'],$DB_CONNECTOR['port']);
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
