<?php
session_start();
require('fpdf/fpdf.php'); // Incluir FPDF

if (!isset($_SESSION['factura'])) {
    die("No hay factura disponible.");
}

$factura = $_SESSION['factura'];

// Configuración para generar el PDF
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 16);
$pdf->MultiCell(0, 10, $factura);
$pdf->Output('D', 'factura.pdf');
?>
