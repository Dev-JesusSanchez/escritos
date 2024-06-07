<?php
// Datos de conexión a la base de datos
$servername = "localhost"; // Cambiar a la dirección de tu servidor de base de datos si es diferente
$username = "root"; // Cambiar a tu nombre de usuario de la base de datos
$password = ""; // Cambiar a tu contraseña de la base de datos
$database = "escritos"; // Cambiar al nombre de tu base de datos

// Crear la conexión
$conexion = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}
?>
