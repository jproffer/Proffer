<?php

namespace Controller;
use 
	\config\Config, 
	\libary\Template;


	class Get extends \Core\CAbstract implements \Interfaces\iAbstract {
		protected $config = array(
			"include_css"	=>false,
			"include_js"		=>false,
			"execute"			=>false
		);
		public function gslib($arr) { }

		public function cssA() {
			global $themepath;
			$name=explode("_",$this->uri->name);
			if (count($name)>1) {
				if (file_exists(PATH_ROOT.Config::$themepath."/{$name[0]}/{$name[1]}.css")) {
					header("content-type: text/css");
					try {
						$fp=fopen(PATH_ROOT.Config::$themepath."/{$name[0]}/{$name[1]}.css", 'r');
						echo stream_get_contents($fp);
					} catch (Exception $e) { }
					@fclose($fp);
				}
			}
			exit;
		}
		public function jsA() {
			$name=explode("_",$this->uri->name);
			
			if (count($name)>1) {
				if (file_exists(PATH_ROOT."/js/Includes/{$name[0]}/{$name[1]}.js")) {
					header("content-type: text/javascript");
//					file_get_contents(PATH_ROOT."/js/{$name[0]}/{$name[1]}.js");
					try {
						$fp=fopen(PATH_ROOT."/js/Includes/{$name[0]}/{$name[1]}.js", 'r');
						echo stream_get_contents($fp);
					} catch (Exception $e) { }
					@fclose($fp);
				}
			}
			exit;
		}
        public function dialogA() {
            $dialog=str_replace("_","/",$this->uri->name);
            $smarty = new Template();
            $smarty->generate("dialogs/$dialog",$this->uri);
        }
		
		public function twitterfeedA() {
			$feed = new TwitterProxy();
		}
	}
	
	class TwitterProxy {
		/* Twitter Proxy for updated OAuth */

		public function __construct() {
			// Parse $twitter_request into URL parameters
		}
		public function getFeed($count=3) {
			$twitter_request = "statuses/user_timeline.json?screen_name=".self::$config['screen_name']."&count=$count";
			$url_part = parse_url($twitter_request);

			/* url_arguments=
			* Array
			* (
			*    [screen_name] => lcherone
			*    [count] => 3
			* )
			*/
			parse_str($url_part['query'], $url_arguments);

			$base_url = $config['base_url'].$url_part['path'];
			$full_url = $config['base_url'].$twitter_request;

			// Set up the OAuth authorization array
			$oauth = array(
			'oauth_consumer_key' => $config['consumer_key'],
			'oauth_nonce' => time(),
			'oauth_signature_method' => 'HMAC-SHA1',
			'oauth_token' => $config['oauth_access_token'],
			'oauth_timestamp' => time(),
			'oauth_version' => '1.0'
			);

			// Build vectors for request
			$composite_request = $this->_BaseString($base_url, 'GET', array_merge($oauth, $url_arguments));
			$composite_key     = rawurlencode($config['consumer_secret']).'&'.rawurlencode($config['oauth_access_token_secret']);
			$oauth_signature   = base64_encode(hash_hmac('sha1', $composite_request, $composite_key, true));
			$oauth['oauth_signature'] = $oauth_signature;

			// Make cURL Request
			$options = array(
			CURLOPT_HTTPHEADER => array($this->_AuthorizationHeader($oauth),'Expect:'),
			CURLOPT_HEADER => false,
			CURLOPT_URL => $full_url,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_SSL_VERIFYPEER => false
			);

			$feed = curl_init();
			curl_setopt_array($feed, $options);
			$result = curl_exec($feed);
			$info = curl_getinfo($feed);
			curl_close($feed);

			// Send suitable headers to the end user.
//			if(isset($info['content_type']) && isset($info['size_download'])){
//				header('Content-Type: '.$info['content_type']);
//				header('Content-Length: '.$info['size_download']);
//			}
			return $result;
		}
		private function _BaseString($base_url, $method, $values) {
			$ret = array();
			ksort($values);
			foreach($values as $key=>$value)
			$ret[] = $key."=".rawurlencode($value);
			return $method."&".rawurlencode($base_url).'&'.rawurlencode(implode('&', $ret));
		}

		private function _AuthorizationHeader($oauth) {
			$ret = 'Authorization: OAuth ';
			$values = array();
			foreach($oauth as $key=>$value)
			$values[] = $key.'="'.rawurlencode($value).'"';
			$ret .= implode(', ', $values);
			return $ret;
		}
		
	}
?>