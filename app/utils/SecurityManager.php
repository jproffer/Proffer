<?php
/**
 * Security manager class
 * @author Johnathan Proffer
 */

	namespace utils;
	
	use \library\crypto;
	
	class SecurityManager {
		
		
		/**
		 * Validate access rights to a specific area.  We allow validation of multiple types
		 * @example library_SecurityManager::CheckecBasic('admin', 'client', 'clientAdmin')
		 * Failed access rights destroys user session and redirects to homepage
		 */
		
		public static function CheckSecBasic() {
			$required=func_get_args();
			if (
		!$_SESSION['ili'] || // 'is logged in' = 'ili'
		(!empty($required) && array_search($_SESSION['user']->utype,$required)===FALSE)
			) {
			session_destroy();
			header("Location:/",TRUE,307);
			exit;
			}
		}
		
		/**
		 * Generate an access token for pages.  This is to prevent hacks.
		 * @param string $name
		 * @return string
		 */
		public static function GenerateToken($name) {
			$time=time();
			$key=crypto::encrypt("$time|{$_COOKIE['PHPSESSID']}|$name");
			$key = urlencode($key);
			$field=md5($_COOKIE['PHPSESSID']);
			$_SESSION["{$name}_tokenfield"]=$field;
			return "<input type='hidden' name='$field' value='$key'>";
		}
		
		public static function GenerateReferenceToken($table,$field) {
			$chrs = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
			$len = strlen($chrs) - 1;
			$code='';
			$continue=true;
			$dbm = new \Core\MDbm();
			
			while ($code == '') {
				for ($j=0; $j< SHARE_CODE_SIZE; $j++) {
					$code.=$chrs[mt_rand(0,$len)];
				}
				$sql = "select * from $table where $field = '$code'";
				$res=$dbm->query($sql);
				if (mysqli_num_rows($res) > 0) {
					$code = '';
				} else {
					return $code;
				}
			}
			
		}
		
		/**
		 * Validate a form or page token
		 * @param string $name
		 * @return bool
		 */
		public static function ValidateToken($uri, $name) {
			$token=$uri->{$_SESSION["{$name}_tokenfield"]};
			if ($token=='') { return false; } // return FALSE if token doesnt exist.
			$token = urldecode($token);
			$data=explode("|",crypto::decrypt($token));
			
			if (count($data)<3 || $data[2]!==$name) {  return false; } // return FALSE if array missing fields, or incorrect name
			if (time()-$data[0] > 14400) { return false; } // expire token after 4 hours
			if ($data[1]!==$_COOKIE['PHPSESSID']) { return false; } // doesnt match current session. wut? go away h4x0r
			return true;
		}

		/**
		 * @name password generator
		 * @var $type:
		 *			$dict = generate based on list of words, up to $len words
		 *			$rand = generate random-char pass, up to $len chars
		 * @return string
		 **/
		public static function GenPW($type='dict',$len=2) {
			global $dbm;
			$pwchars="abcdefghijklmnopqrstuvwxyz0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ-!@#%^&*()\$";
			$maxarrlen=strlen($pwchars);
			if ($type=='rand') {
				$pw='';
				for ($i=0; $i<$len; $i++) {
					$pw.=$pwchars{mt_rand(0,$maxarrlen-1)};
				}
				return $pw;
			} elseif ($type=='dict') {
				$sql="select * from words order by RAND() limit 2";
				$res=$dbm->query($sql);
				$itmz=array();
				while ($row=mysqli_fetch_assoc($res)) {
					$itmz[]=$row['word'];
				}
				$pw=implode("-",$itmz);
				return $pw;
			}
		}
	}
?>
