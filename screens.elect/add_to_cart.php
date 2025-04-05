<?php
session_start();

$product_id = $_POST['product_id'];
$product_name = $_POST['product_name'];
$product_price = $_POST['product_price'];
$product_quantity = 1; // Cantidad predeterminada de 1

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

$cart = &$_SESSION['cart'];

if (isset($cart[$product_id])) {
    $cart[$product_id]['quantity'] += $product_quantity;
} else {
    $cart[$product_id] = array(
        'name' => $product_name,
        'price' => $product_price,
        'quantity' => $product_quantity
    );
}

echo '<script>alert("¡Producto agregado al carrito!");</script>';

?>
