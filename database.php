<?php

$host = 'localhost';
$user = 'root';
$password = '';
$database = 'php_login_database';

try {
  $connection = new PDO("mysql:host=$host;dbname=$database", $user, $password);
  $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
} catch (PDOException $e) {
  die('Connection failed: ' . $e->getMessage());
}
?>
