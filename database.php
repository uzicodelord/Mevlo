<?php
    
    $dbHost = "localhost";
    $dbName = "test";
    $dbChar = "utf8";
    $dbUser = "root";
    $dbPass = "";
    $pdo = new PDO(
        "mysql:host=$dbHost;charset=$dbChar;dbname=$dbName",
        $dbUser,
        $dbPass,
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );
?>