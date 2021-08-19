<?php

$env = strtoupper($_ENV['ENV']);

return array(
    'slim' => array(
        'debug' => $env == 'DEV' ? true : false,
        'templates.path' => '..' . DIRECTORY_SEPARATOR . 'templates',
        'cookies.encrypt' => $_ENV['COOKIES_ENCRYPT'],
        'cookies.lifetime' => $_ENV['COOKIES_LIFETIME'],
        'cookies.secret_key' => $_ENV['COOKIES_SECRET'],
        'sessions.driver' => $_ENV['SESSION_DRIVER'],
        'sessions.table' => $_ENV['SESSION_TABLE'],
        'sessions.files' => __DIR__ . DIRECTORY_SEPARATOR."..".DIRECTORY_SEPARATOR.$_ENV['SESSION_DIRECTORY']

    ),
    'logger' => array(
        'name' => $_ENV['APP_NAME']
    ),
    'view' => array(
        'debug'=>$env == 'DEV' ? true : false,
        'charset' => 'utf-8',
        'cache' => '..' . DIRECTORY_SEPARATOR . 'templates' . DIRECTORY_SEPARATOR . 'cache',
        'auto_reload' => true,
        'strict_variables' => false,
        'autoescape' => true
    ),
    "db" => array(
        'driver' => $_ENV['DB_DRIVER'],
        'host' => $_ENV['DB_HOST'],
        'database' => $_ENV['DB_DATABASE'],
        'username' => $_ENV['DB_USERNAME'],
        'password' => $_ENV['DB_PASSWORD'],
        'charset'   => $_ENV['DB_CHARSET'],
        'collation' => $_ENV['DB_COLLATION'],
        'prefix'    => $_ENV['DB_PREFIX'],
    )
);
