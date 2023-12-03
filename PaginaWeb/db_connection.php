<?php
$servername = "127.0.0.1";
$username = "pma";
$password = "Pablotruco11";
$dbname = "iot";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
