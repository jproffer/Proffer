<?php

/**
 * Mobile class
 * Responsible for determining if the end user is on a mobile device.
 * 
 * @author Johnathan Proffer
 * @Copyright (c) Johnathan Proffer
 * @license http://www.gnu.org/licenses/gpl-3.0.html GNU General Public Licence 
 */
class Mobile {

	public $mobile = false;
	protected $mobile_agents = array(
		'w3c ', 'acs-', 'alav', 'alca', 'amoi', 'audi', 'avan', 'benq', 'bird', 'blac',
		'blaz', 'brew', 'cell', 'cldc', 'cmd-', 'dang', 'doco', 'eric', 'hipt', 'inno',
		'ipaq', 'java', 'jigs', 'kddi', 'keji', 'leno', 'lg-c', 'lg-d', 'lg-g', 'lge-',
		'maui', 'maxo', 'midp', 'mits', 'mmef', 'mobi', 'mot-', 'moto', 'mwbp', 'nec-',
		'newt', 'noki', 'palm', 'pana', 'pant', 'phil', 'play', 'port', 'prox', 'qwap',
		'sage', 'sams', 'sany', 'sch-', 'sec-', 'send', 'seri', 'sgh-', 'shar', 'tim-',
		'sie-', 'siem', 'smal', 'smar', 'sony', 'sph-', 'symb', 't-mo', 'teli', 'wapp',
		'tosh', 'tsm-', 'upg1', 'upsi', 'vk-v', 'voda', 'wap-', 'wapa', 'wapi', 'xda-',
		'wapr', 'webc', 'winw', 'winw', 'xda'
	);

	public function __construct() {
		if (preg_match('/(up.browser|up.link|mmp|symbian|smartphone|midp|wap|phone|android)/i', strtolower($_SERVER['HTTP_USER_AGENT']))) {
			$this->mobile = true;
		}

		if ((strpos(strtolower($_SERVER['HTTP_ACCEPT']), 'application/vnd.wap.xhtml+xml') > 0) or ( (isset($_SERVER['HTTP_X_WAP_PROFILE']) or isset($_SERVER['HTTP_PROFILE'])))) {
			$this->mobile = true;
		}

		$mobile_ua = strtolower(substr($_SERVER['HTTP_USER_AGENT'], 0, 4));
		if (in_array($mobile_ua, $mobile_agents)) {
			$this->mobile = true;
		}

		if (strpos(strtolower($_SERVER['ALL_HTTP']), 'operamini') > 0) {
			$this->mobile = true;
		}
		if (strpos(strtolower($_SERVER['HTTP_USER_AGENT']), ' ppc;') > 0) {
			$this->mobile = true;
		}
		if (strpos(strtolower($_SERVER['HTTP_USER_AGENT']), 'windows') > 0) {
			$this->mobile = false;
		}
		if (strpos(strtolower($_SERVER['HTTP_USER_AGENT']), 'iemobile') > 0) {
			$this->mobile = true;
		}
	}

}

?>
