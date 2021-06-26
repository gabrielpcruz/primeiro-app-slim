<?php

use App\App;
use App\Http\Middleware\ExampleBeforeMiddleware;
use App\Http\Middleware\ExampleAfterMiddleware;

require __DIR__ . '/../vendor/autoload.php';

const DS = DIRECTORY_SEPARATOR;
define('ROOT_PATH', realpath(__DIR__.'/../').DS);
define('APP_PATH', realpath(ROOT_PATH .'app/').DS);


$app = App::app();

// Middlewares
$app->add(ExampleBeforeMiddleware::class);
$app->add(ExampleAfterMiddleware::class);

// routes
require_once ROOT_PATH . "routes/web.php";

$app->run();
