<?php
// Conexión a la base de datos
$conexion = new mysqli('localhost:3307', 'root', '', 'productos');

// Verificar conexión
if ($conexion->connect_error) {
    die("Error en la conexión: " . $conexion->connect_error);
}

// Verificar si se ha enviado alguna acción
if (isset($_POST['accion'])) {
    // Agregar nuevo registro
    if ($_POST['accion'] == 'agregar') {
        $nombre = $_POST['username'];
        $email = $_POST['password'];
        
        $sql = "INSERT INTO login (username, password) VALUES ('$nombre', '$email')";
        $conexion->query($sql);
    }
    // Eliminar registro
    elseif ($_POST['accion'] == 'eliminar') {
        $id = $_POST['id'];
        $sql = "DELETE FROM login WHERE id=$id";
        $conexion->query($sql);
    }
    // Buscar registro por ID
    elseif ($_POST['accion'] == 'buscar') {
        $id = $_POST['id'];
        $sql = "SELECT * FROM login WHERE id=$id";
        $resultado = $conexion->query($sql);
        
        if ($resultado->num_rows > 0) {
            $fila = $resultado->fetch_assoc();
            echo json_encode($fila);
        } else {
            echo json_encode(null);
        }
    }
}

// Cargar registros en la tabla
$sql = "SELECT * FROM login";
$resultado = $conexion->query($sql);

if ($resultado->num_rows > 0) {
    while($fila = $resultado->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$fila['id']."</td>";
        echo "<td>".$fila['username']."</td>";
        echo "<td>".$fila['password']."</td>";
        echo "<td><button onclick='eliminarRegistro(".$fila['id'].")'>Eliminar</button></td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='4'>No se encontraron registros</td></tr>";
}

$conexion->close();
?>
