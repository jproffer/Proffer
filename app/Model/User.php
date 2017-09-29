<?php
/**
 * Sample model.
 */
	namespace Model;
	
	class User extends \Model\Core\CAbstract {
		public $type=false;
		private $table = "users";
		
		protected $config = array(
			"include_css"	=>false,
			"include_js"	=>false,
			"execute"		=>false
		);

		public static function CheckLogin($uid,$pwd) {
			$dbm = new \Core\Dbm();
			$pwd=sha1($pwd);
			$res = $dbm->query("select * from users inner join profile USING (ID) WHERE users.UID='$uid' and PWD='$pwd'");
			if ($res->num_rows > 0) {
				$row=mysqli_fetch_assoc($res);
				return new User($row);
			} else {
				return false;
			}
		}
	}
?>
