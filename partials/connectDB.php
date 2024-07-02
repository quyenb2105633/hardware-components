<?php 

$dns = "mysql:host=localhost;dbname=flower-shop";
$dbusername="root";
$dbpassword="";

try {
    $pdo = new PDO($dns, $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
   echo "connection failed: " . $e->getMessage();
}