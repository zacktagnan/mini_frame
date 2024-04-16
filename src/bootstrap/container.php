<?php

use DI\ContainerBuilder;

require __DIR__ . '/../vendor/autoload.php';

$containerBuilder = new ContainerBuilder;
$containerBuilder->useAutowiring(false);
$containerBuilder->addDefinitions(base_path('bootstrap/config.php'));

try {
    // $container = $containerBuilder->build();
    // return $container;
    // o, directamente,
    return $containerBuilder->build();
} catch (Exception $ex) {
    echo $ex->getMessage();
}
