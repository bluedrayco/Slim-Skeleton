<?php
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Nette\Database\Connection;

$app->container->singleton('database',function()use($configuration){
    return new Connection(
        $configuration['database']['dsn'], 
        $configuration['database']['username'], 
        $configuration['database']['password']
    );
});

$app->container->singleton('log', function ()use($configuration) {
    $log = new Logger($configuration['logger']['name']);
    $log->pushHandler(new StreamHandler(__DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'logs'.DIRECTORY_SEPARATOR.'app.log', Logger::DEBUG));
    return $log;
});