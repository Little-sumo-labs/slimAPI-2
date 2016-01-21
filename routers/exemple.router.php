<?php

namespace routers;
use models\Exemple;

$app->get('/', function () {
	echo "Hello, everybody !";
});

$app->get('/hello/:name', function ($name) {
	echo "Hello, " . $name;
});

$app->get('/atome',  function () use ($app) {
	$ex = new Exemple();
	$data = $ex->getAllData();
	echo json_encode($data);
});

$app->get('/atome/:name', function ($name) use ($app) {
	$ex = new Exemple();

	$data = $ex->getData($name);
	echo json_encode($data);
});
