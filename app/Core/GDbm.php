<?php
	
	/**
	* DBM manager for Mongo
	* Version 1.0
	* @author Johnathan Proffer
	* @Copyright (c) Johnathan Proffer
	* @license http://www.gnu.org/licenses/gpl-3.0.html GNU General Public Licence 
	*/

	namespace Core;
	use library\FB,
		Core\Exceptions\DatabaseException as DE;
	
	class GDbm {

		private static $mongo;
		private $db;
		
		public function __construct() {
			global $MONGO_DB_CONNECTOR;
			if ($MONGO_DB_CONNECTOR['uid']!='') { $LoginInfo = "{$MONGO_DB_CONNECTOR['uid']}:{$MONGO_DB_CONNECTOR['pwd']}@"; }
			$connstr="mongodb://$LoginInfo{$MONGO_DB_CONNECTOR['host']}:{$MONGO_DB_CONNECTOR['port']}";
			try {
				self::$mongo = new \Mongo($connstr);
			} catch (MongoConnectionException $e) {
				(!CLI) ? FB::log($e) : print_r($e);					
				return;
			}
			$this->db = self::$mongo->selectDB($MONGO_DB_CONNECTOR['db']);
		}
		
		public function __destruct() {
			if (self::$mongo->connected) {
				self::$mongo->close();
			}
		}
		
		private function checkconn() {
			if (!self::$mongo->connected) {
				self::$mongo->connect();
			}
		}
		
		/**
		 * 
		 * @param mongocollection $collection
		 * @param string $qry
		 * @param string $type
		 * @return boolean
		 */
		public function query($collection, $qry, $type="find") {
			$this->checkconn();
			$coll = $this->db->$collection->find();
                        echo "<pre>";
                        print_r($coll);exit;
                        print_r($coll->{$type}($qry));exit;
			$cur = null;
			try {
				$cur = $coll->{$type}($qry);
			} catch (MongoConnectionException $e) {
				(!CLI) ? FB::log(array("Query_was"=>$qry,"message" => $e)) : print_r(array("Query_was"=>$qry,"message" => $e));					
				echo "MCOE\n";
				return false;
			} catch (MongoCursorException $e) {
				(!CLI) ? FB::log($e) : print_r($e);
				echo "MCE\n";
				return false;
			} catch (MongoException $e) {
				(!CLI) ? FB::log($e) : print_r($e);					
				echo "ME\n";
				return false;
			}
//			if (get_class($cur)!="MongoCursor") {
//				FB::error(array("Collection" => $collection, "Query_was"=>$qry,"lastError"=>$this->db->lastError()), "DBM::query()");
//				return false;
//			}
			if (is_array($cur)) {
				if (!$cur->valid()) {
					$cur->rewind();
					if (!$cur->valid()) {
						FB::log("Collection: $collection");
						FB::log($qry);
						FB::log($this->db->lastError());
					}
				}

				$items=array();
				foreach ($cur as $item) {
					$items[]=$item;
				}
				return $items;
			} elseif ($type!="find" || is_object($cur)) { 
				return $cur; 
				} // findOne, there's no cursor just a returned array. so we return that
			else { 
				echo "failure!\n";
				echo "==============\n";
				print_r($cur);
				echo "==============\n";
				exit;
				return false; 
			} // not findOne, and not an array, so must be an invalid query. We return false
		}
		
		public function squery($collection, $qry) {
			return $this->query($collection, $qry, "findOne");
		}
	};

?>
