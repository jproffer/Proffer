<?php

	namespace library;
/**
 * Crypto class
 * @author Johnathan Proffer
 */
	class crypto {
		/**
		 * Encrypt 
		 * @param string $data
		 * @return string
		 */
		public static function encrypt($data) {
			if (USE_CRYPTO) {
				$iv = substr(sha1(CRYPTO_MASTERKEY),0,32);
				return base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, $iv, $data, MCRYPT_MODE_CFB, $iv));
			} else { return $data; }
		}
		
		/**
		 * Decrypt
		 * @param string $data
		 * @return string
		 */
		public static function decrypt($data) {
			if (USE_CRYPTO) {
				$iv = substr(sha1(CRYPTO_MASTERKEY),0,32);
				return mcrypt_decrypt(MCRYPT_RIJNDAEL_256, $iv, base64_decode($data), MCRYPT_MODE_CFB, $iv);
			} else { return $data; }
		}
	}
?>
