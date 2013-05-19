<?php
/**
 * Store sessions in mysql
	* @author Johnathan Proffer
	* @Copyright (c) Johnathan Proffer
	* @license http://www.gnu.org/licenses/gpl-3.0.html GNU General Public Licence 
 */
	namespace Core;
	use Core\MDbm,
		\Memcached;
//	

 class Sessions implements \SessionHandlerInterface {

	// Session singleton
	private static	$instance = null;
	protected static $dbm;
	protected		$type = "memcached";
	protected		$_sessionid=0;
	public			$_session_name;
	protected		$memcache;
	protected		$settings;
//	protected		$initSessionData = null;
	
	public static function init($type="memcached") {
		return self::getInstance($type="memcached");
	}
	
	/**
	 * Singleton instance of Session.
	**/
	
	/**
	 * Fetch a singleton
	 * @param string $type
	 * @return \Core\Sessions
	 */
	public static function getInstance($type="memcached") {
		if (self::$instance == null) {
			self::$instance = new Sessions($type);
		}
		session_start();
		self::$instance->_session_name = self::$instance->settings->prefix . session_id();
		self::$instance->_sessionid=session_id();
		return self::$instance;
	}
	
	public function __destruct() { }
	
	/**
	 * Fetch current session ID
	 * @return string
	 */
	public static function getSessionID() {
		return self::$instance->_sessionid;
	}
	
	
	public function __construct($type) {
		global $session_config;
		$this->settings = $session_config;
		register_shutdown_function("session_write_close");
		$this->lifeTime = intval(ini_get("session.gc_maxlifetime"));
		switch ($this->type) {
			case 'mysql': {
				self::$dbm = MDbm::getInstance();
				break;
			}
			// for now we only have memcached so make it the default
			case 'memcached': {
				$this->memcache = new Memcached();
				$this->memcache->setOption(Memcached::OPT_HASH, Memcached::HASH_MD5);
//				$this->memcache->setOption(Memcached::OPT_DISTRIBUTION, Memcached::DISTRIBUTION_CONSISTENT);
				$this->memcache->setOption(Memcached::OPT_SERIALIZER, Memcached::SERIALIZER_PHP);
				$this->memcache->setOption(Memcached::OPT_CONNECT_TIMEOUT, 150);
				$this->memcache->setOption(Memcached::OPT_RETRY_TIMEOUT, 1);
				if (!$this->memcache->addServers(array($this->settings->hosts))) {
					// @todo: log this somewhere
					echo "Failure: ". $this->memcache->getResultMessage();
					exit;
				}
			}
		}
		session_set_save_handler($this);
	}
	
	public static function validateSessionID($id) {
		return (session_id() == $id) ? true : false;
	}

	/**
	 * Destroy current session
	 * @param string $sessionID
	 * @return boolean
	 */
	public function destroy($sessionID) {
		$sessionID = self::$instance->settings->prefix .$sessionID;
		switch ($this->type) {
			case 'mysql': {
				self::$dbm->query("delete from sessions where sid='$sessionID'");
				break;
			}
			case 'memcached':
			default: {
				$this->memcache->delete($sessionID);
			}
		}
		return true;
	}
	
	/**
	 * Initiate session
	 * @param string $save_path
	 * @param string $name
	 * @return boolean
	 */
	public function open($save_path, $name) { 
            $sessionID = self::$instance->settings->prefix . session_id();
//            if ($sessionID !== "") {
//            }
            return true;		
	}
	
	public function close() { 
		$this->gc(0);
		$this->lifetime = $this->memcache = null;
		self::$dbm = null;
		return true; 		
	}
	/**
	 * Write session to db/file
	 * @param string $sessionID
	 * @param string $data
	 * @return boolean
	 */	
		public function write($sessionID, $data) {
			if (empty($sessionID)) { return false; }
			$sessionID = $this->settings->prefix . $sessionID;
			$ip=$_SERVER['REMOTE_ADDR'];
			$t=time();
			$expires=$t + $this->lifeTime;
			$result = false;
			switch ($this->type) {
				case 'mysql': {
					$data=safestring($data);
					$sql="
						REPLACE INTO sessions (sid,session_name,`expires`,`data`,ipaddr)
						values ('$sessionID','{$this->_session_name}', $expires,'$data','$ip')
					";
					$res=self::$dbm->query($sql);
					$result = is_resource($res);
					break;
				}
				case 'memcached':{
					$result = $this->memcache->set($sessionID,$data,$this->lifeTime);
					if (!$result) {
						\library\FB::log($this->memcache);//echo "<br />Failure (".$this->memcache->getResultCode()."): ". $this->memcache->getResultMessage();
					}
					break;
				}
			}
			return $result;
		}
		
		/**
		 * Read session from db/file
		 * @param string $sessionID
		 * @return boolean
		 */
		public function read($sessionID) {
			$sessionID = $this->settings->prefix . $sessionID;
			$data = null;
			switch ($this->type) {
				case 'mysql': {
					$sql="select data from sessions where sid='$sessionID'";
					$res=self::$dbm->query($sql);
					if (mysqli_num_rows($res) == 0) { $this->deleteSession(); return false; }
					$row = mysqli_fetch_assoc($res);
					$data = $row['data'];
				}
				case 'memcached':{
					$data = $this->memcache->get($sessionID);
					if ($this->memcache->getResultCode() != 0) {
						\library\FB::log($this->memcache);
					}
				}
			}
			return $data;
		}
		
		/**
		 * Garbage collection
		 * @param int $max
		 * @return num_rows
		 */
		public function gc($max) {
			switch ($this->type) {
				case 'mysql': {
					$sql = "delete from `sessions` where `expires` <= '".time() - $this->lifeTime . "'";
					self::$dbm->query($sql);
					break;
				}
				default: {
					// memcache has built-in gc
				}
			}
		}
		
		/**
		 * Close session and erase cookies
		 */
		protected function DeleteSession() {
			setcookie($this->_session_name, time()-SESSION_TIMEOUT); //expire any cookies associated with this session
			setcookie('PHPSESSID',time()-SESSION_TIMEOUT);
			session_destroy();
		}
		
		/**
		 * Return our current User object
		 * @global User $CURRENT_USER
		 * @return User
		 */
		public static function getCurrentUser() {
//			return self::$instance->user;
			return $_SESSION['user'];
		}
		
		public function __put($key,$val) {
			self::$instance->$key = $val;
		}
		
		public function __get($var) {
			return self::$instance->$var;
		}
		
		public function add($key,$val) {
			self::$instance->$key = $val;
		}
} // End Session Class
?>
