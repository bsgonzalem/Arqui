<?php
include "connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["nombre"];
    echo "Nombre recibido: " . $name;

    $sendData = "INSERT INTO usuarios (Nombre) VALUES ('$name')";
    if ($connection->query($sendData) === TRUE) {
        echo "\n || Datos enviados correctamente";
    } else {
        echo "Error al enviar los datos: " . $connection->error;
    }
}
?>