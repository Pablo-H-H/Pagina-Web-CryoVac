<?php
include 'db_connection.php';

// Consulta SQL para obtener datos de la tabla dth11
$sql = "SELECT time, light, temp, humi FROM esp32";
$result = $conn->query($sql);

// Crear un array asociativo para almacenar los datos
$data = array();
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

// Convertir datos a formato JSON
echo json_encode($data);

// Cerrar la conexión
$conn->close();
?>
