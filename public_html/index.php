<?php
require __DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'vendor'.DIRECTORY_SEPARATOR.'autoload.php';

use Slim\Slim;
use Dotenv\Dotenv;

// Load Environment Variables
$dotenv = Dotenv::createImmutable(__DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR);
$dotenv->load();

// Get configuration
$configuration = require __DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'app'.DIRECTORY_SEPARATOR.'configuration.php';

// Prepare app
$app = new Slim($configuration['slim']);

// Set compatibility layer 
require __DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'app'.DIRECTORY_SEPARATOR.'compatibility.php';

// Set container definitions
require __DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'app'.DIRECTORY_SEPARATOR.'container.php';

// Load routes
require __DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'app'.DIRECTORY_SEPARATOR.'routes.php';

// Run app
$app->run();
