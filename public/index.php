<?php

use App\Controllers\PostController;
use App\DB\DbFactory;
chdir(dirname(__DIR__));

require_once __DIR__.'/../app/Controllers/PostController.php';
require_once __DIR__.'/../DB/DBPDO.php';
require_once __DIR__.'/../DB/DbFactory.php';
$data= require 'config/database.php';
try {
    $pdoConn = DbFactory::create($data);
    $conn = $pdoConn->getConn();
    $stm = $conn->query('select * from posts', \PDO::FETCH_ASSOC);
    if ($stm) {
        foreach ($stm as $row) {
            print_r($row);
        }
    }
}
catch (\PDOException $e){
    die($e->getMessage());
}

$controller = new PostController();
$controller->show(1);
$controller->display();
