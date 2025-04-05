<?php
session_start();
if (!isset($_SESSION['factura'])) {
    die("No hay factura disponible.");
}

$factura = $_SESSION['factura'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Factura</title>
</head>
<body>
    <center>
    <img style="align-items: center; width: 15%; height: 15%;" src="../img/logo1.png">
    <h1>Factura</h1>
    <pre><?php echo nl2br($factura); ?></pre>
    <form method="post" action="guardar_pdf.php">
        <button type="submit">Guardar como PDF</button>
        <button type="submit">Actualizar</button>
    </form>
</center>
</body>
</html>
