<?php
/**
 * Session manager class
 * Has some bugs, DO NOT USE YET!
 * @author Johnathan Proffer
 * @Copyright (c) Johnathan Proffer
 * @license http://www.gnu.org/licenses/gpl-3.0.html GNU General Public Licence 
*/
namespace Core;
exit;

abstract class Sessions extends \Core\Dbm {

	// Session singleton
	private static $instance;

	// Protected key names (cannot be set by the user)
	protected static $protect = array('_timeout','sid','username','session_name','organization_id','mod_time','sessiondata','expires','ipaddr');
	private static $_timeout = 7200;
	protected $_sessionid=0;
	public $_session_name;
	/**
	 * Singleton instance of Session.
	**/
	
	public static function instance() {
		if (self::$instance == NULL) {
			// Create a new instance
			new Core_Sessions();
		}
		return self::$instance;
	}
	public function __destruct() { parent::__destruct(); }

	protected function __construct() {
		global $__CORE_SESSIONS__;
		if ($__CORE_SESSIONS__) { return; }
		parent::__construct();
		$this->_session_name = "TSESS_".PATH_WWW;
		$protect = array_combine(self::$protect, self::$protect);
		session_set_save_handler(
			array($this, '_session_open'),
			array($this, '_session_close'),
			array($this, '_session_read'),
			array($this, '_session_write'),
			array($this, '_session_destroy'),
			array($this, '_session_gc')
		);
		// Name the session, this will also be the name of the cookie
		session_start();
		$this->_sessionid=session_id();
		$__CORE_SESSIONS__ = true;
	}

		public function _session_destroy($id) {
			parent::query("delete from sessions where sid='$id'");
			return true;
		}
		
		public function _session_open() { return true; }
		public function _session_close() { $this->_session_gc(0); return true; }
		
		public function _session_write($id, $data) {
			if (empty($id)) { return false; }
			
			$ip=$_SERVER['REMOTE_ADDR'];
			$t=time();
			$expires=$t + self::$_timeout;
			$data=safestring($data);
			$sql="
				REPLACE INTO sessions (sid,session_name,`expires`,`data`,ipaddr)
				values ('$id','{$this->_session_name}', $expires,'$data','$ip')
			";
			$res=parent::query($sql);
			return true;
		}
		
		public function _session_read($id) {
			$sql="select data from sessions where sid='$id'";
			$row=parent::getRow($sql);
			if ($row == null) {
				$this->DeleteSession();
				return false;
			}
			return $row['data'];
		}
		public function _session_gc($max) {
			$time=time();
			parent::query("delete from sessions where expires <= $time");
			return parent::affected();
		}
		protected function DeleteSession() {
			setcookie($this->_session_name, time()-3600); //expire any cookies associated with this session
			setcookie('PHPSESSID',time()-3600);
			session_destroy();
		}

} // End Session Class
?>
