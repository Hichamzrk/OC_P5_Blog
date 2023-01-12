<?php

	error_reporting(E_ALL);
	ini_set("display_errors", 1);

	//On définit une constante contenant le dossier racine
	define('ROOT', dirname(__DIR__));

	//On importe les namespace nécessaires
	use App\Core\Router;

	//On importe l'autoloader
	require ROOT . '/vendor/autoload.php';

	//On instancie la router Main
	$app = new Router();

	//On démarre l'application depuis le router Main
	$app->start();

?>

