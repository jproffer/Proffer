<?php
namespace Controller;

use \Model\User, \library\Util;

class Auth extends \Core\CAbstract implements \Interfaces\iAbstract  {

	public function LoginA() {
		if ($_POST) {
			$this->noexec();
			$user = new User();
			$UserModel = $user->CheckLogin($this->uri->uid,$this->uri->pwd);
			if (!$UserModel) {
				$this->_error="Invalid login!";
			} else {
				$user->isLoggedIn=true;
				$_SESSION['user'] = $UserModel;
				$type = ucwords(strtolower($user->instance->type));
				Util::Redirect("/");
			}
		}
	}

	public function LogoutA() {
		$this->noexec();
		unset($_SESSION['user']);
		$this->DeleteSession();
		Util::Redirect("/auth/login");
		exit;
	}

	public static function CheckStatus() {
		if (!is_object($_SESSION['user']) || empty($_SESSION['user']->id)) {
			Util::Redirect("/auth/login");
		}
	}
}

?>