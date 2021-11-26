<?php

use App\Controllers\PostController;
use App\DB\DbFactory;

chdir(dirname(__DIR__));
require_once __DIR__.'/../core/bootstrap.php';
$appConfig = require 'config/app.config.php';

try {
    $data = require 'config/database.php';
    $conn = DbFactory::create($data)->getConn();
    $router = new Router($conn);
    $router->loadRoutes($appConfig['routes']);
    /**
     * @var $controller PostController
     */
    $controller = $router->dispatch();
    $controller->process();
    $controller->display();

}
catch (PDOException $e){
    die($e->getMessage());
}

