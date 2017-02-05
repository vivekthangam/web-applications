<?php
    $dsn = 'mysql:host=localhost;dbname=vivek';
    $username = 'root';
    $password = '';

    try {
        $con = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        exit();
    }
?>