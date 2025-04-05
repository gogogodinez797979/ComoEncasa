<?php
// procesar_login.php

// Configuración de la base de datos
$servername = "localhost:3307"; // Cambia esto si tu servidor de base de datos es diferente
$username = "root";  // Cambia esto por tu usuario de la base de datos
$password = ""; // Cambia esto por tu contraseña de la base de datos
$dbname = "productos"; // Cambia esto por el nombre de tu base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener los datos del formulario
$email = $_POST['email'];
$password = $_POST['password'];

// Consulta para verificar las credenciales
$sql = "SELECT * FROM login WHERE username = ? AND password = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $email, $password);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Obtener el rol del usuario
    $row = $result->fetch_assoc();
    $role_id = $row['rol']; // Suponiendo que el ID del rol del usuario está almacenado en una columna llamada 'rol'

    // Redireccionar según el rol
    switch ($role_id) {
        case '  administrador' :
            header("Location: des.html"); // Cambia "pagina_admin.php" por la página a la que quieres redirigir a los administradores
            break;
        case 2:
            header("Location: pagina_usuario.php"); // Cambia "pagina_usuario.php" por la página a la que quieres redirigir a los usuarios normales
            break;
        default:
            echo "Rol desconocido.";
    }
} else {
    // Credenciales incorrectas
    echo "Correo electrónico o contraseña incorrectos.";
}

// Cerrar la conexión
$stmt->close();
$conn->close();
?>
