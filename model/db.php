<?php
    $dsn = 'mysql:host=phpmyadmin.mandrake.arvixe.com;dbname=webtrends';
    $username = 'webtrends';
    $password = 'webtrends2015';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }
?>