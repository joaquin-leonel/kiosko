<?php

// $server = 'localhost:3307';
$server = 'localhost';
$username = 'root';
$password = '';
// $database = 'php_login_database';
$database = 'kiosko';

try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}

// if($conn==true){
//   echo "conectado";
// }
?>
