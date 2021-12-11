<?php
$host = 'localhost';
$username = 'root';
$password = '';
$dbName = 'sklep';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbName", $username, $password);
} catch (PDOException $e) {
    die("Error connecting to database!");
}
