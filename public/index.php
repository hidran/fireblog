<?php

use App\Controllers\PostController;
use App\DB\DbFactory;
chdir(dirname(__DIR__));

require_once __DIR__.'/../helpers/functions.php';
require_once __DIR__.'/../DB/DBPDO.php';

require_once __DIR__.'/../DB/DbFactory.php';


require_once __DIR__ . '/../app/controllers/PostController.php';

require_once __DIR__ . '/../app/models/Post.php';

try {
    $data= require 'config/database.php';
    $conn = DbFactory::create($data)->getConn();
    $controller = new PostController($conn);
$controller->process();
    $controller->display();

}
catch (PDOException $e){
    die($e->getMessage());
}

