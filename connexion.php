<?php

//Connect to the MySQL database using the PDO object.

try {
    $pdo = new PDO('mysql:host=localhost;dbname=finale_poo', 'root', '');
} catch (PDOException $e) {
    echo $e->getMessage();
}