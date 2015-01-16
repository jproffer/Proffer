<?php
	class SecurityManager {
		public static function CheckSecBasic() {
			$required=func_get_args();
			if (
					!$_SESSION['ili'] ||
					(!empty($required) && array_search($_SESSION['user']->utype,$required)===FALSE)
				) {
				session_destroy();
				header("Location:/",TRUE,307);
				exit;
			}
		}
		public static function GenerateToken($name) {
			$time=time();
			$key=crypto::encrypt("$time|{$_COOKIE['PHPSESSID']}|$name");
			$field=md5($_COOKIE['PHPSESSID']);
			$_SESSION["{$name}_tokenfield"]=$field;
			return "<input type='hidden' name='$field' value='$key'>";
		}
		public static function ValidateToken($name) {
			$token=$_POST[$_SESSION["{$name}_tokenfield"]];
			if ($token=='') { return false; } // return FALSE if token doesnt exist.
			$data=explode("|",crypto::decrypt($token));
			if (count($data)<3 || $data[2]!==$name) {  return false; } // return FALSE if array missing fields, or incorrect name
			if (time()-$data[0] > (60*120)) { return false; } // expire token after 2 hours
			if ($data[1]!==$_COOKIE['PHPSESSID']) { return false; } // doesnt match current session. wut? go away h4x0r
			return true;
		}

		public static function FillBasicData() {
			global $GoogleAutoloaderString, $themepath,$GoogleAjaxAPIKey;
			$data = array();
			$data["GoogleAutoLoader"]=$GoogleAutoloaderString;
			$data["GoogleAPI"]=$GoogleAjaxAPIKey;
			$data['themepath']=$themepath;
			$data['footer_year']=date("Y");
			$data['post']=$_POST;
			if (is_object($_SESSION['user'])) {
				$data['user']=$_SESSION['user']->GetVars();
			}
			return $data;
		}
		/**
		 * @name password generator
		 * @var $type:
		 * 					$dict = generate based on list of words, up to $len words
		 * 					$rand = generate random-char pass, up to $len chars
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