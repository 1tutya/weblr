<?php

$host = 'db';
$dbname = 'mydb';
$user = 'root';
$pass = 'rootpass';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOExcepion $e) {
    die("Connection error: " . $e->getMessage());
}

?>