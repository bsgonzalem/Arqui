<?php
$host = "127.0.0.1";
$user = "root";
$password = "root"; 
$database = "solicitud";

$connection = new mysqli($host, $user, $password, $database);

if ($connection->connect_error) {
    die("Error de conexión: " . $connection->connect_error);
}
?>