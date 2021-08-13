<?php
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Slim\Views\Twig;
use Illuminate\Database\Capsule\Manager;

$app->view(new Twig());

$app->container->singleton('log', function ()use($configuration) {
    $log = new Logger($configuration['logger']['name']);
    $log->pushHandler(new StreamHandler(__DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'logs'.DIRECTORY_SEPARATOR.'app.log', Logger::DEBUG));
    return $log;
});

$app->container->singleton('db', function ()use($configuration) {
    $capsule = new Manager();
    $capsule->addConnection($configuration['db']);
    $capsule->setAsGlobal();
    $capsule->bootEloquent();
    return $capsule;
});