<?php
// Configuración de la conexión a la base de datos
$host = 'localhost:3307'; // Nombre del servidor de la base de datos
$usuario = 'root'; // Usuario de la base de datos
$contrasena = ''; // Contraseña de la base de datos
$base_de_datos = 'productos'; // Nombre de la base de datos

// Crear conexión
$conexion = mysqli_connect($host, $usuario, $contrasena, $base_de_datos);

// Verificar conexión
if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}
?>