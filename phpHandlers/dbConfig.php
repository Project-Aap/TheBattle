<?php

if ($_SERVER["HTTP_HOST"] == "localhost") {
    $link = "http://" . $_SERVER["HTTP_HOST"] . "/Minigames-Center";
    $server = "localhost";
    $user = "root";
    $pass = "";
    $dbName = "thebattle";
    
    $dbConn = new PDO("mysql:host=$server;dbname=$dbName", $user, $pass);
    $dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} else {
    $server = "localhost";
    $user = "epiz_25235384";
    $pass = "EuJCv1EE366U0X";
    $dbName = "epiz_25235384_debattleDB";
    
    $dbConn = new PDO("mysql:host=$server;dbname=$dbName", $user, $pass);
    $dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}