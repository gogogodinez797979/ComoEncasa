<?php
session_start();
$servername = "localhost:3307"; // Cambiar si es necesario
$username = "root"; // Cambiar si es necesario
$password = ""; // Cambiar si es necesario
$dbname = "productos"; // Nombre de la base de datos

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$sql = "SELECT id, nombre, descripcion, precio, imagen FROM productos";
$result = $conn->query($sql);



if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}
$cart = $_SESSION['cart'];
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
 <link rel="stylesheet" type="style.css" href="">
  <title>AGORA</title>
</head>
<body>


<style>

.loader {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #C2B199;
    z-index: 9999;
     animation: draw 50s ease;    

}

footer {
        background-color: #333;
        color: #fff;
        padding: 10px;
        text-align: center;
}
.navbar {
            width: 100%;
            z-index: 1000;
            position: sticky;
            top: 0;
            margin-left: -1px;
        }
.custom-link {
      text-decoration: none;
      color: white;
    }
    .custom-link p {
      margin: 0;
}

.loader img {
        width: 500px;
        height: 550px;
        object-fit: cover;
}

.content {
        display: none;
        width: 100%;
        height: 100%;
        background-color: #E8DCCA;
        overflow: auto;
}

</style>
<!-- Animacion
<div class="loader">
    <img src="gif/logo.gif" alt="Loading">
</div>

<script>
    // Simular un retraso de carga y luego mostrar el contenido principal
    setTimeout(function() {
        document.querySelector('.loader').style.display = 'none';
        document.querySelector('.content').style.display = 'block';
    }, 10000); // 3000 ms = 3 segundos
</script>
--> 

<div id="productModal" class="modal">
    <div style="margin-top: 105px;" class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>
        <div id="productInfo"></div>
        <button style="width: 100px;" class="back-btn" onclick="closeModal()">Regresar</button>
    </div>
</div>
                
                    </div>
                </div>       

<nav class="navbar-expand-lg bg-body-tertiary">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div style="background: #9B7A59; height: 90px ;margin-top: 0 px; padding-top: -10px" class="navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          
        </li>
        <li class="nav-item">
          
        </li>
       
        <li class="nav-item">
        <a href="../index.php">
            <img style="height: 150px; width: 150px; margin-left: 20px;" src="../img/logo.png" alt="">
          </a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input style="margin-left: -1000px; width: 700px; border-radius: 25px;" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <a class="nav-link me-2" href="#" role="button" data-bs-toggle="" aria-expanded="false">
          <img style="height: 40px; width: 40px;" src="img/lupa.png" alt="" width="100" height="100">
        </a>

        <div class="d-flex">
          <a href="login.php" class="me-1">
          <img style="margin-left: 80px; height: 50px; width: 50px;" src="../img/index/login.png" alt="" class="img-fluid" style="height: 50px; width: 50px;">
          </a>
         
           <a href="../carrito/cart.php" class="me-1">
           <img src="../img/index/carrito.png" alt="" class="img-fluid" style="height: 50px; width: 50px;">
            <a style="color: white;text-align: center; margin-:-10px; margin-left: -20px;background:#6B5013; border-radius:200px; height:20px;width:20px;  " href="../carrito/cart.php"> <?php echo count($cart); ?> </a>
          </a>
        </div>



      </form>
    </div>
  </div>
</nav>
<nav style="padding-top: -10px; width: 100%; height: 60px; background: #6B503C; margin-left: -1px;"> </nav>






<style>
  /* Estilo para el contenedor del carousel */
  .skew-container {
    overflow: hidden; /* Para ocultar partes del contenido diagonal */
    transform: skew(-200deg); /* Aplica una transformación de inclinación diagonal */
    width: 100%; /* Ajusta el ancho del contenedor */
  }

  /* Estilo para el carousel dentro del contenedor diagonal */
  .skew-container .carousel-inner {
    transform: skew(deg); /* Contrarresta la inclinación del contenedor */
  }

  /* Ajusta el tamaño del carousel para que no se recorte el contenido */
  .skew-container .carousel-item img {
    height: 100%;
    object-fit: cover;
  }

  /* Estilo para hacer el carrusel responsive */
  @media (max-width: 768px) {
    .skew-container {
      width: auto; /* Cambia el ancho a automático en dispositivos pequeños */
    }
  }
</style>

<center>
    <img style="margin-top: 30px;" src="../img/artqM/1.png" class="d-block w-100" alt="...">
 </center>



 <div style=" margin-top: 30px;"  class="row row-cols-1 row-cols-md-4 mb-4 text-center">
                <div class="col">
                    <div   class="card mb-4 rounded-3 shadow-sm">
                        <div class="product" onclick="showproduct('1')" class="card-header py-3">
                                                   
                        </div>
                        <div class="card-body">
                          
                                    
                            <ul class="list-unstyled mt-3 mb-4">
                                <div  class="products">
    <div class="product" onclick="showProduct('1')">
        <img  style="width: 280px;" src="../img/artqM/11.png" alt="Licuadora">

        <h2>Vajilla de porcelana</h2>
<p>Vajilla de porcelana con diseño floral. Incluye platos, tazas y tazones.</p>
<p>Q720.00</p>
       
        


<ul>
    <?php
    $producto_id = 1; // ID del producto que deseas recuperar, puedes cambiar este valor según el producto deseado
    $sql = "SELECT * FROM productos WHERE id = $producto_id"; // Consulta SQL para seleccionar el producto específico
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            
            echo "<form action='add_to_cart.php' method='post'>";
            echo "<input type='hidden' name='product_id' value='" . $row["id"] . "'>";
            echo "<input type='hidden' name='product_name' value='" . $row["nombre"] . "'>";
            echo "<input type='hidden' name='product_price' value='" . $row["precio"] . "'>";
            echo "<button type='submit'class='color' >Añadir al Carrito</button>";
            echo "</form>";
            
        }
    } else {
        echo "No se encontró el producto.";
        
    }
   
    ?>
</ul>


    </div>
                                
                            </ul>
                            
                        </div>
                    </div>
                </div>



                
            <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="product" onclick="showproduct('2')" class="card-header py-3">
                    
                            
                        </div>
                        <div class="card-body">
                          
                            <ul class="list-unstyled mt-3 mb-4">
                                 <div class="products">
    <div class="product" onclick="showProduct('2')">
        <img   style="width: 280px;" src="../img/artqM/12.png" alt="Licuadora">
        <h2>Juego de platos</h2>
<p>Juego de platos de cerámica en color negro. Incluye platos llanos, hondos y tazas.</p>
<p>Q650.00</p>
        <ul>
    <?php
    $producto_id = 2; // ID del producto que deseas recuperar, puedes cambiar este valor según el producto deseado
    $sql = "SELECT * FROM productos WHERE id = $producto_id"; // Consulta SQL para seleccionar el producto específico
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            
            echo "<form action='add_to_cart.php' method='post'>";
            echo "<input type='hidden' name='product_id' value='" . $row["id"] . "'>";
            echo "<input type='hidden' name='product_name' value='" . $row["nombre"] . "'>";
            echo "<input type='hidden' name='product_price' value='" . $row["precio"] . "'>";
            echo "<button type='submit'class='color' >Añadir al Carrito</button>";
            echo "</form>";
            
        }
    } else {
        echo "No se encontró el producto.";
        
    }
    
    ?>
</ul>
    </div>
                                
                            </ul>
                            
                      </div>
                    </div>
                </div>





                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="product" onclick="showproduct('3')" class="card-header py-3">
                    
                            
                        </div>
                        <div class="card-body">
                          
                            <ul class="list-unstyled mt-3 mb-4">
                                 <div class="products">
    <div class="product" onclick="showProduct('3')">
        <img   style="width: 280px;" src="../img/artqM/13.png" alt="Licuadora">
        <h2>Juego de platos blancos</h2>
<p>Juego de platos de cerámica en color blanco. Incluye platos llanos y hondos.</p>
<p>Q580.00</p>
         <ul>
    <?php
    $producto_id = 3; // ID del producto que deseas recuperar, puedes cambiar este valor según el producto deseado
    $sql = "SELECT * FROM productos WHERE id = $producto_id"; // Consulta SQL para seleccionar el producto específico
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            
            echo "<form action='add_to_cart.php' method='post'>";
            echo "<input type='hidden' name='product_id' value='" . $row["id"] . "'>";
            echo "<input type='hidden' name='product_name' value='" . $row["nombre"] . "'>";
            echo "<input type='hidden' name='product_price' value='" . $row["precio"] . "'>";
            echo "<button type='submit'class='color' >Añadir al Carrito</button>";
            echo "</form>";
            
        }
    } else {
        echo "No se encontró el producto.";
        
    }
    
    ?>
</ul>
    </div>
                                
                            </ul>
                            
                      </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="product" onclick="showproduct('4')" class="card-header py-3">
                    
                            
                        </div>
                        <div class="card-body">
                          
                            <ul class="list-unstyled mt-3 mb-4">
                                 <div class="products">
    <div class="product" onclick="showProduct('4')">
        <img   style="width: 280px;" src="../img/artqM/14.png" alt="Licuadora">
        <h2>Set de especieros</h2>
<p>Set de frascos para especias con tapa metálica. Incluye 6 piezas.</p>
<p>Q150.00</p>
        <ul>
    <?php
    $producto_id = 4; // ID del producto que deseas recuperar, puedes cambiar este valor según el producto deseado
    $sql = "SELECT * FROM productos WHERE id = $producto_id"; // Consulta SQL para seleccionar el producto específico
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            
            echo "<form action='add_to_cart.php' method='post'>";
            echo "<input type='hidden' name='product_id' value='" . $row["id"] . "'>";
            echo "<input type='hidden' name='product_name' value='" . $row["nombre"] . "'>";
            echo "<input type='hidden' name='product_price' value='" . $row["precio"] . "'>";
            echo "<button type='submit'class='color' >Añadir al Carrito</button>";
            echo "</form>";
            
        }
    } else {
        echo "No se encontró el producto.";
        
    }
    
    ?>
</ul>
    </div>
                                
                            </ul>
                            
                      </div>
                    </div>
                </div>
            </div>

            </div>




          </center>

 <div style=" margin-top: 30px;"  class="row row-cols-1 row-cols-md-4 mb-4 text-center">
                <div class="col">
                    <div   class="card mb-4 rounded-3 shadow-sm">
                        <div class="product" onclick="showproduct('1')" class="card-header py-3">
                                                   
                        </div>
                        <div class="card-body">
                          
                                    
                            <ul class="list-unstyled mt-3 mb-4">
                                <div class="products">
    <div class="product" onclick="showProduct('1')">
        <img   style="width: 280px;" src="../img/artqM/15.png" alt="Licuadora">


        <h2>Set de especieros surtidos</h2>
<p>Set de frascos con diferentes especias. Incluye 8 piezas.</p>
<p>Q200.00</p>
       
        


<ul>
    <?php
    $producto_id = 5; // ID del producto que deseas recuperar, puedes cambiar este valor según el producto deseado
    $sql = "SELECT * FROM productos WHERE id = $producto_id"; // Consulta SQL para seleccionar el producto específico
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            
            echo "<form action='add_to_cart.php' method='post'>";
            echo "<input type='hidden' name='product_id' value='" . $row["id"] . "'>";
            echo "<input type='hidden' name='product_name' value='" . $row["nombre"] . "'>";
            echo "<input type='hidden' name='product_price' value='" . $row["precio"] . "'>";
            echo "<button type='submit'class='color' >Añadir al Carrito</button>";
            echo "</form>";
            
        }
    } else {
        echo "No se encontró el producto.";
        
    }
   
    ?>
</ul>


    </div>
                                
                            </ul>
                            
                        </div>
                    </div>
                </div>



                
            <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="product" onclick="showproduct('2')" class="card-header py-3">
                    
                            
                        </div>
                        <div class="card-body">
                          
                            <ul class="list-unstyled mt-3 mb-4">
                                 <div class="products">
    <div class="product" onclick="showProduct('2')">
        <img   style="width: 280px;" src="../img/artqM/16.png" alt="Licuadora">
        <h2>Tabla de cortar</h2>
<p>Tabla de cortar de madera. Incluye dos tamaños.</p>
<p>Q250.00</p>
        <ul>
    <?php
    $producto_id = 1; // ID del producto que deseas recuperar, puedes cambiar este valor según el producto deseado
    $sql = "SELECT * FROM productos WHERE id = $producto_id"; // Consulta SQL para seleccionar el producto específico
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            
            echo "<form action='add_to_cart.php' method='post'>";
            echo "<input type='hidden' name='product_id' value='" . $row["id"] . "'>";
            echo "<input type='hidden' name='product_name' value='" . $row["nombre"] . "'>";
            echo "<input type='hidden' name='product_price' value='" . $row["precio"] . "'>";
            echo "<button type='submit'class='color' >Añadir al Carrito</button>";
            echo "</form>";
            
        }
    } else {
        echo "No se encontró el producto.";
        
    }
    
    ?>
</ul>
    </div>
                                
                            </ul>
                            
                      </div>
                    </div>
                </div>





                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="product" onclick="showproduct('3')" class="card-header py-3">
                    
                            
                        </div>
                        <div class="card-body">
                          
                            <ul class="list-unstyled mt-3 mb-4">
                                 <div class="products">
    <div class="product" onclick="showProduct('3')">
        <img   style="width: 280px;" src="../img/artqM/17.png" alt="Licuadora">
        <h2>Espátula de madera</h2>
<p>Espátula de cocina de madera, ideal para cocinar y servir.</p>
<p>Q60.00</p>
         <ul>
    <?php
    $producto_id = 1; // ID del producto que deseas recuperar, puedes cambiar este valor según el producto deseado
    $sql = "SELECT * FROM productos WHERE id = $producto_id"; // Consulta SQL para seleccionar el producto específico
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            
            echo "<form action='add_to_cart.php' method='post'>";
            echo "<input type='hidden' name='product_id' value='" . $row["id"] . "'>";
            echo "<input type='hidden' name='product_name' value='" . $row["nombre"] . "'>";
            echo "<input type='hidden' name='product_price' value='" . $row["precio"] . "'>";
            echo "<button type='submit'class='color' >Añadir al Carrito</button>";
            echo "</form>";
            
        }
    } else {
        echo "No se encontró el producto.";
        
    }
    
    ?>
</ul>
    </div>
                                
                            </ul>
                            
                      </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="product" onclick="showproduct('2')" class="card-header py-3">
                    
                            
                        </div>
                        <div class="card-body">
                          
                            <ul class="list-unstyled mt-3 mb-4">
                                 <div class="products">
    <div class="product" onclick="showProduct('2')">
        <img   style="width: 280px;" src="../img/artqM/18.png" alt="Licuadora">
        <h2>Set de batidores</h2>
<p>Set de batidores de acero inoxidable. Incluye tres tamaños.</p>
<p>Q80.00</p>
        <ul>
    <?php
    $producto_id = 1; // ID del producto que deseas recuperar, puedes cambiar este valor según el producto deseado
    $sql = "SELECT * FROM productos WHERE id = $producto_id"; // Consulta SQL para seleccionar el producto específico
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            
            echo "<form action='add_to_cart.php' method='post'>";
            echo "<input type='hidden' name='product_id' value='" . $row["id"] . "'>";
            echo "<input type='hidden' name='product_name' value='" . $row["nombre"] . "'>";
            echo "<input type='hidden' name='product_price' value='" . $row["precio"] . "'>";
            echo "<button type='submit'class='color' >Añadir al Carrito</button>";
            echo "</form>";
            
        }
    } else {
        echo "No se encontró el producto.";
        
    }
    ?>
    </ul>
        </div>
                                    
                                </ul>
                                
                          </div>
                        </div>
                    </div>

    <div class="col">
    <div class="card mb-4 rounded-3 shadow-sm">
        <div class="product" onclick="showproduct('2')" class="card-header py-3">
    
            
        </div>
        <div class="card-body">
          
            <ul class="list-unstyled mt-3 mb-4">
                 <div class="products">
<div class="product" onclick="showProduct('2')">
<img   style="width: 280px;" src="../img/artqM/19.png" alt="Licuadora">
<h2>Set de espátulas de silicona</h2>
<p>Set de espátulas de silicona con mango de acero inoxidable. Incluye dos piezas.</p>
<p>Q90.00</p>
<ul>
<?php
$producto_id = 1; // ID del producto que deseas recuperar, puedes cambiar este valor según el producto deseado
$sql = "SELECT * FROM productos WHERE id = $producto_id"; // Consulta SQL para seleccionar el producto específico
$result = $conn->query($sql);

if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {

echo "<form action='add_to_cart.php' method='post'>";
echo "<input type='hidden' name='product_id' value='" . $row["id"] . "'>";
echo "<input type='hidden' name='product_name' value='" . $row["nombre"] . "'>";
echo "<input type='hidden' name='product_price' value='" . $row["precio"] . "'>";
echo "<button type='submit'class='color' >Añadir al Carrito</button>";
echo "</form>";

}
} else {
echo "No se encontró el producto.";

}

   
    ?>
</ul>
    </div>
                                
                            </ul>
                            
                      </div>
                    </div>
                </div>





               
    </div>

<!--Footer-->
  <nav style="margin-top: 20px; width: 100%; height: 60px;background: #6B503C; margin-left: -1px;"></nav>
  <footer style="background: #C2AB8A;" class="footer mt-auto py-3">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6" style="text-align: left;">
          <h5>Nuestros Productos</h5>
          <br>
          <a href="../screens.elect/indexelectro.php" class="custom-link">
            <p>Electrodomésticos</p>
          </a>
          <a href="../screens.artqM/indexarticulosm.php" class="custom-link">
            <p>Artículos de Mesa</p>
          </a>
          <a href="../screens.amdc/indexamueblado.php" class="custom-link">
            <p>Amueblado de Comedor</p>
          </a>
        </div>
        <div class="col-lg-4 col-md-6" style="text-align: left;">
          <h5>Ayuda</h5>
          <br>
          <a href="../Ayuda/reglamento.php" class="custom-link">
            <p>Reglamentos</p>
          </a>
          <p>Tiendas</p>
          <a href="../Ayuda/accion.php" class="custom-link">
            <p>Accion Social</p>
          </a>
            <p>Cotizaciones</p>
          <a href="../Ayuda/preguntas.php" class="custom-link">
            <p>Preguntas Frequentes</p>
          </a>
        </div>
        <div class="col-lg-4 col-md-12" style="text-align: left;">
          <h5>Contactanos</h5>
          <br>
          <div>
            <div class="frame-redes">
              <a href="https://www.facebook.com" target="_blank" rel="noreferrer" class="hide-text">
                <span class="redes">
                  <svg width="30" height="30" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20 10.0609C20 4.50304 15.5242 0 10 0C4.47581 0 0 4.50304 0 10.0609C0 15.0824 3.65686 19.2446 8.4375 20V12.9692H5.89718V10.0609H8.4375V7.84422C8.4375 5.32292 9.92944 3.93022 12.2145 3.93022C13.3089 3.93022 14.4532 4.12657 14.4532 4.12657V6.60122H13.1919C11.95 6.60122 11.5625 7.37688 11.5625 8.17241V10.0609H14.3359L13.8923 12.9692H11.5625V20C16.3431 19.2446 20 15.0824 20 10.0609Z" fill="#6B503C">
                    </path>
                  </svg>
                </span>
              </a>
              &nbsp;&nbsp;&nbsp;&nbsp;
              <a href="https://www.instagram.com/" target="_blank" rel="noreferrer" class="hide-text">
                <span class="redes">
                  <svg width="30" height="30" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.0022 4.87117C7.16453 4.87117 4.87563 7.16007 4.87563 9.99777C4.87563 12.8355 7.16453 15.1244 10.0022 15.1244C12.8399 15.1244 15.1288 12.8355 15.1288 9.99777C15.1288 7.16007 12.8399 4.87117 10.0022 4.87117ZM10.0022 13.3307C8.16843 13.3307 6.66927 11.836 6.66927 9.99777C6.66927 8.15951 8.16397 6.66481 10.0022 6.66481C11.8405 6.66481 13.3352 8.15951 13.3352 9.99777C13.3352 11.836 11.836 13.3307 10.0022 13.3307ZM16.5343 4.66146C16.5343 5.32627 15.9989 5.85722 15.3385 5.85722C14.6737 5.85722 14.1428 5.32181 14.1428 4.66146C14.1428 4.00112 14.6782 3.4657 15.3385 3.4657C15.9989 3.4657 16.5343 4.00112 16.5343 4.66146ZM19.9297 5.87507C19.8539 4.27329 19.488 2.85443 18.3146 1.68544C17.1456 0.516453 15.7267 0.150586 14.1249 0.0702733C12.4741 -0.0234244 7.52593 -0.0234244 5.87507 0.0702733C4.27775 0.146124 2.8589 0.511991 1.68544 1.68098C0.511991 2.84997 0.150586 4.26882 0.0702733 5.87061C-0.0234244 7.52147 -0.0234244 12.4696 0.0702733 14.1205C0.146124 15.7223 0.511991 17.1411 1.68544 18.3101C2.8589 19.4791 4.27328 19.845 5.87507 19.9253C7.52593 20.019 12.4741 20.019 14.1249 19.9253C15.7267 19.8494 17.1456 19.4836 18.3146 18.3101C19.4835 17.1411 19.8494 15.7223 19.9297 14.1205C20.0234 12.4696 20.0234 7.52594 19.9297 5.87507ZM17.797 15.8918C17.449 16.7663 16.7752 17.4401 15.8963 17.7925C14.58 18.3146 11.4568 18.1941 10.0022 18.1941C8.54769 18.1941 5.41997 18.3101 4.1082 17.7925C3.23369 17.4445 2.55996 16.7708 2.20747 15.8918C1.68544 14.5756 1.80591 11.4523 1.80591 9.99777C1.80591 8.54323 1.68991 5.41551 2.20747 4.10374C2.55549 3.22923 3.22922 2.55549 4.1082 2.20301C5.42443 1.68098 8.54769 1.80145 10.0022 1.80145C11.4568 1.80145 14.5845 1.68544 15.8963 2.20301C16.7708 2.55103 17.4445 3.22476 17.797 4.10374C18.319 5.41997 18.1985 8.54323 18.1985 9.99777C18.1985 11.4523 18.319 14.58 17.797 15.8918Z" fill="#6B503C">
                    </path>
                  </svg>
                </span>
              </a>
              &nbsp;&nbsp;&nbsp;&nbsp;
              <a href="https://www.pinterest.com" target="_blank" rel="noreferrer" class="hide-text">
                <span class="redes">
                  <svg width="30" height="30" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 0C5.373 0 0 5.373 0 12C0 17.304 3.162 21.772 7.633 23.58C7.397 22.343 7.177 20.454 7.577 18.763C7.924 17.31 9.778 9.954 9.778 9.954C9.778 9.954 9.412 8.764 9.412 7.563C9.412 6.147 10.142 4.92 11.398 4.92C12.486 4.92 12.935 5.808 12.935 6.772C12.935 8.065 12.163 10.503 11.834 11.795C11.596 12.719 12.216 13.545 13.178 13.545C14.918 13.545 16.075 11.263 16.075 8.474C16.075 6.144 14.34 4.5 11.984 4.5C9.233 4.5 7.469 6.49 7.469 8.986C7.469 10.229 7.963 11.323 8.749 11.927C8.896 12.04 8.947 12.185 8.915 12.342C8.83 12.75 8.59 13.92 8.548 14.089C8.495 14.303 8.293 14.387 8.107 14.306C6.399 13.52 5.36 11.618 5.36 9.446C5.36 6.044 7.96 3.273 12.172 3.273C15.395 3.273 18.016 5.462 18.016 8.665C18.016 12.251 15.914 14.909 13.079 14.909C12.215 14.909 11.426 14.478 11.116 13.898C11.116 13.898 10.611 15.716 10.467 16.227C10.184 17.253 9.432 18.978 9.078 19.864C10.049 20.156 11.04 20.273 12.003 20.273C18.627 20.273 24 14.9 24 12C24 5.373 18.627 0 12 0Z" fill="#6B503C">
                    </path>
                  </svg>
                </span>
              </a>
            </div>

            <div class="card mt-5" style="background-color: #C2AB8A; border-color: #C2AB8A;">
              <div class="card-body">
                <form id="comentarios-form">
                  <div class="form-group">
                    <label style="color: white;">Correo electrónico:</label>
                    <input type="email" class="form-control" id="correo" name="correo" required>
                  </div>
                  <div class="form-group mt-3">
                    <label style="color: white;">Comentario:</label>
                    <textarea class="form-control" name="comments" maxlength="500" cols="10" rows="2" required></textarea>
                  </div>
                  <button id="enviar-btn" style="background-color: #6B503C; border-color: #6B503C; border: 1px solid #6B503C;" type="submit" class="btn btn-primary mt-3">Enviar</button>
                </form>
              </div>
            </div>

            <script>
              document.getElementById('comentarios-form').addEventListener('submit', function(event) {
                event.preventDefault(); // Prevenir el envío del formulario
                // Aquí puedes agregar lógica para manejar el envío, como enviar los datos a un servidor
                this.reset(); // Limpiar el formulario
              });
            </script>
          </div>
        </div>
      </div>
      <br>
      <div style="display: flex; justify-content: space-between; align-items: center; padding: 0 20px;">
        <div style="text-align: left;">
          <p>2024. AGORA. Todos los derechos reservados.</p>
        </div>
  </footer>


<style>
.color{
    background-color: #6B503C;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    border-radius: 12px;
    margin-left: -35px;
}

.color:hover {
    background-color: #9B7A59;
}
</style>



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
<script src="script.js"></script>
</body>
</html>
