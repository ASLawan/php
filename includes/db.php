<?php
// connect to dabase
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "my_first_database";

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPION);
} catch(PDOExeception $e){
    echo "Connection failed: " . $e->getMessage();
}

