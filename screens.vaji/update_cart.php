<?php
session_start();

$product_id = $_POST['product_id'];
$product_quantity = $_POST['product_quantity'];

if (isset($_SESSION['cart'][$product_id])) {
    $_SESSION['cart'][$product_id]['quantity'] = $product_quantity;
}

header('Location: cart.php');
?>
