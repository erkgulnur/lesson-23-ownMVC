<?php

require_once 'vendor/autoload.php';

use App\Controllers\HomeController;
use App\Controllers\FileController;
use App\Router;

define('VIEW_PATH', __DIR__.'/views');

$router = new Router();
$router->register('/', function() {
    echo 555;
})->register('/home', [HomeController::class, 'index'])
 ->register('/file', [FileController::class, 'index'])
 ->register('/upload', [FileController::class, 'upload']);

$router->resolve($_SERVER['REQUEST_URI']);