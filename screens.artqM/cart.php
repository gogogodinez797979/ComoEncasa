<?php
session_start();
$cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : array();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Carrito</title>
</head>
<body>

<?php include('navbar.php'); ?>

<h1>Carrito de Compras</h1>

<?php if (empty($cart)): ?>
    <p>El carrito está vacío.</p>
<?php else: ?>
    <table border="1">
        <thead>
            <tr>
                <th>Producto</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>Total</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cart as $product_id => $product): ?>
                <tr>
                    <td><?php echo htmlspecialchars($product['name']); ?></td>
                    <td><?php echo htmlspecialchars($product['price']); ?></td>
                    <td>
                        <form action="update_cart.php" method="post">
                            <input type="hidden" name="product_id" value="<?php echo $product_id; ?>">
                            <input type="number" name="product_quantity" value="<?php echo $product['quantity']; ?>" min="1">
                            <button type="submit">Actualizar</button>
                        </form>
                    </td>
                    <td><?php echo $product['price'] * $product['quantity']; ?></td>
                    <td>
                        <form action="remove_from_cart.php" method="post">
                            <input type="hidden" name="product_id" value="<?php echo $product_id; ?>">
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <p>Total: <?php echo array_reduce($cart, function($sum, $product) {
        return $sum + ($product['price'] * $product['quantity']);
    }, 0); ?></p>
<?php endif; ?>

</body>
</html>
