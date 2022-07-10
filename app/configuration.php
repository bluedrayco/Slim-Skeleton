<?php

$env = strtoupper($_ENV['ENV']);

return array(
    'slim'=>array(
        'debug'=>$env=='DEV'?true:false,
        'templates.path' => '..'.DIRECTORY_SEPARATOR.'templates',
        'cookies.encrypt'=>$_ENV['COOKIES_ENCRYPT'],
        'cookies.lifetime'=>$_ENV['COOKIES_LIFETIME'],
        'cookies.secret_key'=>$_ENV['COOKIES_SECRET'],
        'view'=>"\Slim\View"
    ),
    'logger'=>array(
        'name'=>$_ENV['APP_NAME']
    ),
    'database'=>array(
        'dsn'=>$_ENV['DATABASE_DSN'],
        'username'=>$_ENV['DATABASE_USERNAME'],
        'password'=>$_ENV['DATABASE_PASSWORD']
    )
);