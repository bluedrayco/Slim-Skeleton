<?php
require '..'.DIRECTORY_SEPARATOR.'vendor'.DIRECTORY_SEPARATOR.'autoload.php';

use Slim\Slim;
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR);
$dotenv->load();

// Get configuration
$configuration = require __DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'app'.DIRECTORY_SEPARATOR.'config.php';

// Prepare app
$app = new Slim($configuration['slim']);

// Set container definitions
require __DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'app'.DIRECTORY_SEPARATOR.'container.php';

// Load routes
require '..'.DIRECTORY_SEPARATOR.'app'.DIRECTORY_SEPARATOR.'routes.php';

// Run app
$app->run();
