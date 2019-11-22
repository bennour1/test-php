<?php

function getPDO() {
    $dsn = "mysql:host=localhost;dbname=test;charset=utf8";
    $user = "root";
    $password = "";

    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ];

    return new PDO($dsn, $user, $password, $options );
}
