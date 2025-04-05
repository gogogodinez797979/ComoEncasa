<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Producto</title>
    <style>
        .producto {
            display: flex;
            align-items: flex-start;
            margin: 20px;
        }
        .producto img {
            max-width: 300px;
            margin-right: 20px;
        }
        .producto .info {
            max-width: 500px;
        }
        .producto h2 {
            margin-top: 0;
        }
    </style>
</head>
<body>

<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "productos";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
  die("Conexión fallida: " . $conn->connect_error);
}

// Obtener información del producto
$product_id = $_GET['id'];
$sql = "SELECT * FROM mesa WHERE id = $product_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  $row = $result->fetch_assoc();
  echo "<div class='producto'>";
  echo "<img src='imagenes/" . $row["imagen"] . "' alt='" . $row["nombre"] . "'>";
  echo "<div class='info'>";
  echo "<h2>" . $row["nombre"] . "</h2>";
  echo "<p>Precio: $" . $row["precio"] . "</p>";
  
  echo "</div>";
  echo "</div>";
} else {
  echo "Producto no encontrado";
}
$conn->close();
?>

</body>
</html>
