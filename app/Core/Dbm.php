<?php
namespace Core;	
use \config\Config;
    /**
    * DBM manager for MySQL 5, DSN
    * Version 1.2
    * Copyright (c) 2010 Johnathan Proffer
    * 
    * changelog:
    * 	2008.03.25 - initial version
    * 	2008.04.10 - Added DSN connectivity, removed MySQL 4 support
    * 	2010.05.20 - Removed DSN, Master/Slave support for specific functionality
    */
    class Dbm extends \mysqli {

        public $_mysql_errmsg;
        public $_mysql_errcode;
        private static $_mysql_sql = array();
		public $conn;

    /**
     * Array for converting MYSQLI_*_FLAG constants to text values
     * @var    array
     * @access public
     * @since  Property available since Release 1.6.5
     */
    protected $mysqli_flags = array(
        MYSQLI_NOT_NULL_FLAG        => 'not_null',
        MYSQLI_PRI_KEY_FLAG         => 'primary_key',
        MYSQLI_UNIQUE_KEY_FLAG      => 'unique_key',
        MYSQLI_MULTIPLE_KEY_FLAG    => 'multiple_key',
        MYSQLI_BLOB_FLAG            => 'blob',
        MYSQLI_UNSIGNED_FLAG        => 'unsigned',
        MYSQLI_ZEROFILL_FLAG        => 'zerofill',
        MYSQLI_AUTO_INCREMENT_FLAG  => 'auto_increment',
        MYSQLI_TIMESTAMP_FLAG       => 'timestamp',
        MYSQLI_SET_FLAG             => 'set',
        // MYSQLI_NUM_FLAG             => 'numeric',  // unnecessary
        // MYSQLI_PART_KEY_FLAG        => 'multiple_key',  // duplicatvie
        MYSQLI_GROUP_FLAG           => 'group_by'
    );

    /**
     * Array for converting MYSQLI_TYPE_* constants to text values
     * @var    array
     * @access public
     * @since  Property available since Release 1.6.5
     */
    protected $mysqli_types = array(
        MYSQLI_TYPE_DECIMAL     => 'decimal',
        MYSQLI_TYPE_TINY        => 'tinyint',
        MYSQLI_TYPE_SHORT       => 'int',
        MYSQLI_TYPE_LONG        => 'int',
        MYSQLI_TYPE_FLOAT       => 'float',
        MYSQLI_TYPE_DOUBLE      => 'double',
        // MYSQLI_TYPE_NULL        => 'DEFAULT NULL',  // let flags handle it
        MYSQLI_TYPE_TIMESTAMP   => 'timestamp',
        MYSQLI_TYPE_LONGLONG    => 'bigint',
        MYSQLI_TYPE_INT24       => 'mediumint',
        MYSQLI_TYPE_DATE        => 'date',
        MYSQLI_TYPE_TIME        => 'time',
        MYSQLI_TYPE_DATETIME    => 'datetime',
        MYSQLI_TYPE_YEAR        => 'year',
        MYSQLI_TYPE_NEWDATE     => 'date',
        MYSQLI_TYPE_ENUM        => 'enum',
        MYSQLI_TYPE_SET         => 'set',
        MYSQLI_TYPE_TINY_BLOB   => 'tinyblob',
        MYSQLI_TYPE_MEDIUM_BLOB => 'mediumblob',
        MYSQLI_TYPE_LONG_BLOB   => 'longblob',
        MYSQLI_TYPE_BLOB        => 'blob',
        MYSQLI_TYPE_VAR_STRING  => 'varchar',
        MYSQLI_TYPE_STRING      => 'char',
        MYSQLI_TYPE_GEOMETRY    => 'geometry',
        /* These constants are conditionally compiled in ext/mysqli, so we'll
         * define them by number rather than constant. */
        16                      => 'bit',
        246                     => 'decimal',
    );


        public function __construct() {
            $this->_mysql_errmsg='';
            $this->_mysql_errcode=0;
			$this->conn = parent::__construct(
					Config::$DB_CONNECTOR['host'],
					Config::$DB_CONNECTOR['uid'],
					Config::$DB_CONNECTOR['pwd'],
					Config::$DB_CONNECTOR['db'],
					Config::$DB_CONNECTOR['port']
			);
			if($this->connect_error) {
				$this->_mysql_errcode = 0;
				$this->_mysql_errmsg = mysqli_connect_errno();
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
			/*
			while ($row=mysqli_fetch_assoc($result)) {
				$res[]=$row;
				if ($type!='all') { return $res; }
			}
			return $res;
			*/
        }
		/*** end private functions ***/
		
        private function PrintError() {
        	echo "
				<div
					style='
						float: left;
						padding: 5px;
						background-color: #EFEFEF;
						border: solid #888 1px;
                        clear: both;
				'>
				SQL Error <strong>{$this->_mysql_errcode}</strong> <br />{$this->_mysql_errmsg}<br /><br /><pre>".self::$_mysql_sql."</pre>
				</div>
			";
            die(1);
		}
        public function lastid() {
			return parent::insert_id();
        }
		public function changedb($newdb) {
			parent::select_db($newdb);
		}
    };

?>
