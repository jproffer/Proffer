<?php

	namespace Model;
	use \Core\MDbm;

	class User extends ModelAbstract implements interfaces\Model {

		protected $table = "users";
		
		protected $id;
		
		public $type=false;
		
		protected $orm = array(
			"email"			=> "s",
			"pwd"			=> "s",
			"uType"			=> "i",
			"uState"		=> "i",
			"create_date"	=> "s"
		);
	
		public function __construct($row=false) {
			if ($row) {
				$items = array_keys($this->orm);
				foreach ($row as $item=>$value) {
					// ID is protected (not in ORM), since it is an autoincrement field
					if ($item == 'id') { $this->id = $value; continue; } 
					if (in_array($item, $items) !== false) {
						$this->profile[$item]=$value;
					}
				}
			}
		}

		/**
		 *  Overload save() to pull in an updated record
		 */
		public function save() {
			$id = parent::save();
			if ($id) { $this->id = $id; }
			$this->fetch($this->id);
			return $this->id;
		}
		
		public function isAdmin() {
			return ($this->uType == USERTYPE_ADMIN) ? true : false;
		}
		
		/**
		 * Return user ID, which is protected
		 * @return int
		 */
		public function getID() { return $this->id; }
		
		public function validateEmail($addr) {
			$dbm = new MDbm();
			$sql = "select * from {$this->table} where email = ?";
			$stmt = $dbm->prepare($sql);
			if (!$stmt) { echo "error with $sql: <pre>"; print_r($dbm); exit; }
			$stmt->bind_param("s", $addr);
			$stmt->execute();
			$res = $stmt->get_result();
			$emailStatus = array();
			if (mysqli_num_rows($res) != 0) {
				$emailStatus = ["status" => "0", "msg" => "This email address is already registered."];
			} elseif (!$this->validEmail($addr)) {
				$emailStatus = ["status" => "0", "msg" => "Email address is not valid."];
			} else {
				$emailStatus = ["status" => "1", "msg" => "Email OK."];
			}
			echo json_encode($emailStatus);
		}
			/**
			Validate an email address.
			Provide email address (raw input)
			Returns true if the email address has the email 
			address format and the domain exists.
			*/
			private function validEmail($email) {
			   $isValid = true;
			   $atIndex = strrpos($email, "@");
			   if (is_bool($atIndex) && !$atIndex) {
				  $isValid = false;
			   } else {
				  $domain = substr($email, $atIndex+1);
				  $local = substr($email, 0, $atIndex);
				  $localLen = strlen($local);
				  $domainLen = strlen($domain);
				  if ($localLen < 1 || $localLen > 64) {
					 // local part length exceeded
					 $isValid = false;
				  } else if ($domainLen < 1 || $domainLen > 255) {
					 // domain part length exceeded
					 $isValid = false;
				  } else if ($local[0] == '.' || $local[$localLen-1] == '.') {
					 // local part starts or ends with '.'
					 $isValid = false;
				  } else if (preg_match('/\\.\\./', $local)) {
					 // local part has two consecutive dots
					 $isValid = false;
				  } else if (!preg_match('/^[A-Za-z0-9\\-\\.]+$/', $domain)) {
					 // character not valid in domain part
					 $isValid = false;
				  } else if (preg_match('/\\.\\./', $domain)) {
					 // domain part has two consecutive dots
					 $isValid = false;
				  } else if (!preg_match('/^(\\\\.|[A-Za-z0-9!#%&`_=\\/$\'*+?^{}|~.-])+$/', str_replace("\\\\","",$local))) {
					 // character not valid in local part unless 
					 // local part is quoted
					 if (!preg_match('/^"(\\\\"|[^"])+"$/', str_replace("\\\\","",$local))) {
						$isValid = false;
					 }
				  }
//				  if ($isValid && !(checkdnsrr($domain,"MX") || checkdnsrr($domain,"A"))) {
//					 // domain not found in DNS
//					 $isValid = false;
//				  }
			   }
			   return $isValid;
			}		
		/**
		 * Validate a user
		 * @param string $uid
		 * @param string $pwd
		 * @return bool
		 */
		public function checkLogin($uid,$pwd) {
			$dbm = new MDbm();
			$pwd=sha1($pwd);
			$sql = "select * from {$this->table} where email = ? and pwd = ?";
			$stmt = $dbm->prepare($sql);
			if (!$stmt) { echo "error with $sql: <pre>"; print_r($dbm); exit; }
			$stmt->bind_param("ss", $uid, $pwd);
			$stmt->execute();
			$res = $stmt->get_result();
			if (mysqli_num_rows($res) == 0) { return false; }
			$row=mysqli_fetch_assoc($res);
			return new \Model\User($row);
		}
	}
?>