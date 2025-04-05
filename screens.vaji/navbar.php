<?php

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}
$cart = $_SESSION['cart'];
?>

<nav>
    <a href="index.php">Inicio</a>
    <a href="cart.php">Carrito (<?php echo count($cart); ?>)</a>
</nav>
