<?php

require __DIR__ . '/bootstrap.php';

use App\Http\Request;
use App\Http\Router;
use App\Exceptions\NotFoundHttpException;



$router = new Router([
    '' => __DIR__ . '/controllers/pokedex.php',
    'pokemon' => __DIR__ . '/controllers/pokemon.php',
]);

try {
    require $router->direct(Request::uri());
} catch (NotFoundHttpException $exception) {
    require view('404');
}
