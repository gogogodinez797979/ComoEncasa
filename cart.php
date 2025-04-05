<?php
session_start();
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

$cart = $_SESSION['cart'];

// Ejemplo de añadir un producto al carrito
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['producto_id'])) {
    $producto_id = $_POST['producto_id'];
    // Aquí irían las consultas para obtener los detalles del producto desde la base de datos
    // Supongamos que la consulta devuelve un array asociativo con los detalles del producto
    $producto = array("id" => $producto_id, "name" => "Producto $producto_id", "price" => 10.0, "quantity" => 1);

    if (isset($cart[$producto_id])) {
        $cart[$producto_id]['quantity']++;
    } else {
        $cart[$producto_id] = $producto;
    }
    $_SESSION['cart'] = $cart;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Carrito</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        h1 {
            color: #333;
        }

        .table-container {
            display: flex;
            justify-content: center;
            align-items: flex-start;
            gap: 20px;
        }

        .cart-table {
            width: 60%;
            border-collapse: collapse;
            margin-bottom: 20px;
            border: 1px solid white;
        }

        .cart-table th, .cart-table td {
            padding: 10px;
            text-align: center;
        }

        .cart-table th {
            background-color: #f4f4f4;
            border-color: white;
        }

        .cart-table tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        button {
            background-color: #6B503C;
            color: white;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 5px;
        }

        button:hover {
            background-color: #C2AB8A;
        }

        button i {
            margin: 0;
            padding: 0;
        }

        .navbar, .navbar-nav {
            margin: 0;
            padding: 0;
        }

        .navbar {
            background: #9B7A59;
            height: 90px;
            width: 100%;
        }

        .nav-link img {
            height: 50px;
            width: 50px;
        }

        .nav-search {
            margin-left: -1000px;
            width: 700px;
            border-radius: 25px;
        }

        .d-flex .img-fluid {
            margin-left: 20px;
            height: 50px;
            width: 50px;
        }

        .secondary-nav {
            width: 100%;
            height: 60px;
            background: #6B503C;
        }

        .summary-card {
            width: 20%;
            margin-top: 20px;
            padding: 20px;
            border: 1px solid #f4f4f4;
            border-radius: 10px;
            background-color: #f9f9f9;
            text-align: left;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a href="../index.php">
                        <img style="height: 150px; width: 150px; margin-left: 20px;" src="../img/logo.png" alt="">
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <nav class="secondary-nav"></nav>

    <center>
        <img style="margin-top: 30px;" src="../img/carro.png" class="d-block w-100" alt="...">
    </center>
    <br>
    <br>
        
    <?php if (empty($cart)): ?>
        <H2>El carrito está vacío.</h2>
        <p>Todavia no has empezado a comprar, sigue navegando<p>
        <a href="../index.php">
            <button type="submit">Ver Productos</button>  
        </a>
    <?php else: ?>
        <div class="table-container">
            <table class="cart-table">
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
                            <td><?php echo htmlspecialchars(number_format($product['price'], 2)); ?> Q</td>
                            <td>
                                <form action="update_cart.php" method="post">
                                    <input type="hidden" name="product_id" value="<?php echo htmlspecialchars($product_id); ?>">
                                    <input type="number" name="product_quantity" value="<?php echo htmlspecialchars($product['quantity']); ?>" min="1">
                                    <button type="submit">Actualizar</button>
                                </form>
                            </td>
                            <td><?php echo number_format($product['price'] * $product['quantity'], 2); ?> Q</td>
                            <td>
                                <form action="remove_from_cart.php" method="post">
                                    <input type="hidden" name="product_id" value="<?php echo htmlspecialchars($product_id); ?>">
                                    <button type="submit"><i class="fas fa-trash-alt"></i></button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <div class="summary-card">
                <p>Total: <?php echo number_format(array_reduce($cart, function($sum, $product) {
                    return $sum + ($product['price'] * $product['quantity']);
                }, 0), 2); ?> Q</p>
                <form method="post" action="procesar_compra.php">
                    <button type="submit">Comprar</button>
                </form>
            </div>
        </div>
    <?php endif; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ppMU8oPD5Kj6KxS/85E2xQ2EYJp6mj6GvoF/7RH1/zyBOswEAvUycdA94bK7HT3F" crossorigin="anonymous"></script>
</body>
</html>
