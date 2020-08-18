<?php
	namespace App\Models;

	class TokenManager{

		public static function genToken(){
			if (empty($_SESSION['token'])) {
    			$_SESSION['token'] = bin2hex(random_bytes(32));
			}
			$token = $_SESSION['token'];
			return $token;
		}

		public static function checkToken($proprety){
			if ($_SESSION['token'] != $proprety) {
				http_response_code(404);
			    echo "La page recherchée n'existe pas";
			    unset($_SESSION['token']);
			    die();
			}
			unset($_SESSION['token']);
		}
	}
