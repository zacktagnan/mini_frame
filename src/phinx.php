<?php

use Dotenv\Dotenv;

require __DIR__ . '/./vendor/autoload.php';
Dotenv::createImmutable('./')->load();

return [
    'paths' => [
        'migrations' => '%%PHINX_CONFIG_DIR%%/database/migrations',
        'seeds' => '%%PHINX_CONFIG_DIR%%/database/seeds'
    ],
    // 'migration_base_class' => '\App\Migration\Migration',
    'environments' => [
        'default_migration_table' => 'phinxlog',
        'default_environment' => 'development',
        'production' => [
            'adapter' => 'mysql',
            'host' => 'localhost',
            'name' => 'production_db',
            'user' => 'root',
            'pass' => '',
            'port' => '3306',
            'charset' => 'utf8',
        ],
        'development' => [
            'adapter' => env('DB_CONNECTION'),
            'host' => env('DB_HOST'),
            'name' => env('DB_DATABASE'),
            'user' => env('DB_USERNAME'),
            'pass' => env('DB_PASSWORD'),
            'port' => env('DB_PORT'),
            'charset' => 'utf8mb4', //'utf8',
            // ------------------------------------------------
            // 'adapter' => DB_CONNECTION_CONFIG,
            // 'host' => DB_HOST_CONFIG,
            // 'name' => DB_DATABASE_CONFIG,
            // 'user' => DB_USERNAME_CONFIG,
            // 'pass' => DB_PASSWORD_CONFIG,
            // 'port' => DB_PORT_CONFIG,
            // 'charset' => 'utf8mb4', //'utf8',
        ],
        'testing' => [
            'adapter' => 'mysql',
            'host' => 'localhost',
            'name' => 'testing_db',
            'user' => 'root',
            'pass' => '',
            'port' => '3306',
            'charset' => 'utf8',
        ]
    ],
    'version_order' => 'creation'
];
