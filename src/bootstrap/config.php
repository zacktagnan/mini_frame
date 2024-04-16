<?php

use App\Controllers\ErrorController;
use Illuminate\View\Factory;
use Illuminate\Events\Dispatcher;
use App\Controllers\HomeController;
use App\Controllers\UserController;
use Illuminate\Database\Capsule\Manager;
use Illuminate\View\FileViewFinder;
use Illuminate\Filesystem\Filesystem;
use Illuminate\View\Engines\CompilerEngine;
use Illuminate\View\Engines\EngineResolver;
use Illuminate\View\Compilers\BladeCompiler;

$database = require base_path('config/database.php');
$databaseConnection = $database['connections'][$database['default']];

return [
    // -> Variables cargadas directamente aquí o a través de archivos independientes
    // 'database_connection' => [
    //     'driver'    => env('DB_CONNECTION'),
    //     'host'      => env('DB_HOST'),
    //     'database'  => env('DB_DATABASE'),
    //     'username'  => env('DB_USERNAME'),
    //     'password'  => env('DB_PASSWORD'),
    //     'port'      => env('DB_PORT'),
    //     'charset'   => 'utf8mb4',
    //     'collation' => 'utf8mb4_unicode_ci',
    //     // 'charset'   => 'utf8',
    //     // 'collation' => 'utf8_unicode_ci',
    //     'prefix'    => '',
    // ],
    'database_connection' => $databaseConnection,

    Manager::class => function ($container) {
        $manager = new Manager;
        $manager->addConnection($container->get('database_connection'));
        $manager->setAsGlobal();
        $manager->bootEloquent();

        // Ingresado Eloquent dentro del contenedor de PHP-DI,
        // se instancia desde el public/index.php
        return $manager;
    },

    // -----------------------------------------------------

    ErrorController::class => DI\create(),
    HomeController::class => DI\create(),
    UserController::class => DI\create(),

    // -----------------------------------------------------

    FileViewFinder::class => function ($container) {
        $filesystem = new Filesystem;

        return new FileViewFinder($filesystem, [__DIR__ . '/../resources/views']);
    },

    CompilerEngine::class => function ($container) {
        $filesystem = new Filesystem;
        $compiler = new BladeCompiler($filesystem, __DIR__ . '/../storage/views', shouldCache: false);

        return new CompilerEngine($compiler);
    },

    Factory::class => function ($container) {
        $resolver = new EngineResolver;
        $resolver->register('blade', function () use ($container) {
            return $container->get(CompilerEngine::class);
        });
        $finder = $container->get(FileViewFinder::class);

        return new Factory($resolver, $finder, new Dispatcher);
    },
];
