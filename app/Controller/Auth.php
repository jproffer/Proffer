<?php
	namespace Controller;
	
	class Auth extends \Core\MAbstract implements \Interfaces\iAbstract  {

	/**
	 * User login
	 */
	public function LoginA() {
		$this->addLibrary("colorbox,validate");
		if ($_POST) {
			$user = new \Model\User();
			$u = $user->checkLogin($this->uri->email, $this->uri->pwd);
			if (!$u) {
				$this->_error="Invalid login!";
			} else {
				$u->isLoggedIn=true;
				$_SESSION['user'] = &$u;
				header("Location:/accounts/dashboard/",true,301);
			}
		}
	}

	/**
	 * Terminate user session
	 */
	public function LogoutA() {
		$this->noexec();
		unset($_SESSION['user']);
		session_destroy();
		$this->DeleteSession();
		header("Location:/auth/login/",true,301);
		exit;
	}

	public static function CheckStatus() {
		if (!is_object($_SESSION['user']) || $_SESSION['user']->isLoggedIn !== true ) {
			header("Location:/auth/login/",true,301);exit;
		}
	}
}

?>