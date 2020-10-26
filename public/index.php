<?php

use App\Controllers\PostController;

chdir(dirname(__DIR__));
try {
    $conn = new PDO('mysql:dbname=freeblog;host=localhost','root','hidran');

}catch (\PDOException $e){
    die($e->getMessage());
}
require_once __DIR__.'/../app/Controllers/PostController.php';
$controller = new PostController();
$controller->show(1);
$controller->display();
