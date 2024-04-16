<?php

use function FastRoute\simpleDispatcher;

use FastRoute\RouteCollector;
use App\Controllers\HomeController;
use App\Controllers\UserController;

return simpleDispatcher(function (RouteCollector $route) {
    $route->addRoute('GET', '/', [HomeController::class, 'index']);

    $route->addRoute('GET', '/users', [UserController::class, 'index']);
});
