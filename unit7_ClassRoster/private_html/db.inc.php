<?php
try {
    $pdo = new PDO("mysql:dbname=studentcourse;host=localhost", "bastialejosa", "hola");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
} catch (PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
