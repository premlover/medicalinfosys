<?php
    ob_start();

    try {
        $con = new PDO("mysql:dbname=poodle;host=localhost:8080", "root", "");
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
?>