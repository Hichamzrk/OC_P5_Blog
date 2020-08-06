<?php
	namespace App\Models;

	class TokenManager{

		public static function genToken(){
			$token = bin2hex(random_bytes(32));
			$_SESSION['token'] = $token;

			return $_SESSION['token'];
		}

		public static function checkToken($proprety){
			if ($_SESSION['token'] != $proprety) {
				http_response_code(404);
			    echo "La page recherchée n'existe pas";
			    die();
			}
		}
	}
