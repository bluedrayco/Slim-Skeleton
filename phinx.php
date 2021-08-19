<?php

// load our environment files - used to store credentials & configuration
Dotenv\Dotenv::createImmutable(__DIR__)->load();

return
    [
        'paths' => [
            'migrations' => '%%PHINX_CONFIG_DIR%%/db/migrations',
            'seeds' => '%%PHINX_CONFIG_DIR%%/db/seeds'
        ],
        "migration_base_class" => "Utils\Database\Migration",
        'environments' =>
        [
            'default_database' => 'default',
            'default_migration_table' => 'phinxlog',
            'default'      => [
                'adapter' => $_ENV['DB_DRIVER'],
                'host' => $_ENV['DB_HOST'],
                'name' => $_ENV['DB_DATABASE'],
                'user' => $_ENV['DB_USERNAME'],
                'pass' => $_ENV['DB_PASSWORD'],
                'port' => $_ENV['DB_PORT'],
                'charset' => $_ENV['DB_CHARSET'],
                'collation' => $_ENV['DB_COLLATION'],
            ],
        ],
    ];
