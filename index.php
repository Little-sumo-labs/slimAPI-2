<?php
//__ gestion des erreurs
ini_set('display_errors','on');
error_reporting(E_ALL);

//__ Automatically load obligatory files
require 'vendor/autoload.php';

//__ Initialisation des variables
$dsn = 'mysql:host=localhost;dbname=base;charset=utf8';
$usr = 'root';
$pwd = 'admin';

//__ Instantiation
$app = new \Slim\Slim();
$pdo = new \Slim\PDO\Database($dsn, $usr, $pwd);

//__ routing : Automatically load router files
$routers = glob('routers/*.router.php');
foreach ($routers as $router) {
	require $router;
}

$app->run();
