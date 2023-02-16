<?php
    $hostname = 'localhost'; //127.0.0.1
    $user = 'root';
    $password = '';
    $database = 'wdt072022';

    $connection = mysqli_connect($hostname, $user, $password, $database);
    if ($connection === false) {
        die('Connection error ' . mysqli_connect_error());
    } 
?>