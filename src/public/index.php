<?php

use Dotenv\Dotenv;
use FastRoute\Dispatcher;
use App\Controllers\ErrorController;
use Illuminate\Database\Capsule\Manager;

error_reporting(E_ALL);
ini_set('display_errors', '1');

$container = require __DIR__ . '/../bootstrap/container.php';

// $dotenv = Dotenv::createImmutable('../');
// $dotenv->load();
Dotenv::createImmutable('../')->load();

// -> Visualizando todas las posibles conexiones a la base de datos
// --------------------------------------------------------------------
// var_dump('<pre>');
// var_dump($container->get('database_connection'));
// var_dump('</pre>');

// $container->get(\Illuminate\Database\Capsule\Manager::class);
$container->get(Manager::class);

$dispatcher = require base_path('routes/web.php');

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$route = $dispatcher->dispatch(
    $_SERVER['REQUEST_METHOD'],
    $uri
);

switch ($route[0]) {
    case Dispatcher::NOT_FOUND:
        // echo 'ERROR 404 - Ruta NO encontrada';
        // -------------------------------------
        // o, redirigiendo a otro lugar...
        // -------------------------------------
        $container->call([ErrorController::class, 'errorNotFound'], []);
        break;

    case Dispatcher::METHOD_NOT_ALLOWED:
        // echo 'ERROR 405 - Método HTTP NO permitido';
        $container->call([ErrorController::class, 'errorMethodNotAllowed'], []);
        break;

    case Dispatcher::FOUND:
        $controller = $route[1];
        $parameters = $route[2];
        $container->call($controller, $parameters);
        break;
}
