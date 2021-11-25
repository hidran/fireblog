<?php

// PDO
return [
    'driver' => 'mysql', // può essere sqllite,mssql, oci
    'host' => 'localhost',
    'user' => 'root',
    'password' => 'hidran',
    'database' => 'fireblog',
    'dsn' =>'mysql:host=localhost;dbname=fireblog;charset=utf8',
    'options' => [
        [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ],
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    ]
];
