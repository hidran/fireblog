<?php

use App\Controllers\PostController;

chdir(dirname(__DIR__));

require_once __DIR__.'/../app/Controllers/PostController.php';
require_once __DIR__.'/../DB/DBPDO.php';
$data= require 'config/database.php';
$pdoConn = App\DB\DbPdo::getInstance($data);
$conn = $pdoConn->getConn();
$stm = $conn->query('select * from posts', \PDO::FETCH_ASSOC);
IF($stm){
    foreach ($stm as $row){
        print_r($row);
    }
}
try {
    $conn = new PDO('mysql:dbname=freeblog;host=localhost','root','hidran');

}catch (\PDOException $e){
    die($e->getMessage());
}

$controller = new PostController();
$controller->show(1);
$controller->display();
