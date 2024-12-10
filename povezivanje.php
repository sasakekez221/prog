<?php
    $host = 'localhost';
    $username = 'root';  
    $password = '';      
    $database = 'projekt';
    $charset = 'utf8mb4';
    // Povezivanje na bazu
    $connection = new mysqli($host, $username, $password, $database);
    //PROVEJRA POVEZANOSTI
    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }
    ?>