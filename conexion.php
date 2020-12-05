<?php

$server = 'localhost';
$username = 'root';
$password = '';
$database = 'usuarios';

try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}

$conexion= mysqli_connect($server,$username,$password,$database);

if($conexion){
    echo"Conectado Correctamente";
}else{
    echo"No se pudo conectar";
}
?>
