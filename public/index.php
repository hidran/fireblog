<?php

use App\Controllers\PostController;
use App\DB\DbFactory;
chdir(dirname(__DIR__));


require_once __DIR__.'/../DB/DBPDO.php';

require_once __DIR__.'/../DB/DbFactory.php';

$data= require 'config/database.php';
require_once __DIR__ . '/../app/controllers/PostController.php';
try {

    $conn = DbFactory::create($data)->getConn();
    $controller = new PostController($conn);
$controller->process();
    $controller->display();

}
catch (PDOException $e){
    die($e->getMessage());
}

