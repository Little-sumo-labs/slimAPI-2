<?php

namespace routers;

//__ Affichage de la page d'erreur "404 - Not Found"
$app->notFound(function () use ($app) {
	echo "404, page not found !";
});

//__ Affichage de la page d'erreur 500 "System Error"
$app->error(function (\Exception $e) use ($app) {
	echo "500, server error !";
});
