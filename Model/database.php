<?php

    $dsn = 'mysql:host=localhost;dbname=fitness';
    $username = 'renwid';
    $password = 'password';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        //include('../Error/database_error.php');
        exit();
    }
?>
