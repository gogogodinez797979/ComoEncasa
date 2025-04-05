<?php
session_start();

// Procesar la adición de productos al carrito
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['producto_id'])) {
    $producto_id = $_POST['producto_id'];
    // Aquí irían las consultas para obtener los detalles del producto desde la base de datos
    // Supongamos que la consulta devuelve un array asociativo con los detalles del producto
    $producto = array("id" => $producto_id, "name" => "Producto $producto_id", "price" => 10.0, "quantity" => 1);

    if (isset($_SESSION['cart'][$producto_id])) {
        $_SESSION['cart'][$producto_id]['quantity']++;
    } else {
        $_SESSION['cart'][$producto_id] = $producto;
    }
}

// Procesar la compra y redirigir a la página de factura
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['comprar'])) {
    $nombre = $_POST['nombre'];
    $direccion = $_POST['direccion'];
    $tarjeta = $_POST['tarjeta'];

    // Aquí iría el procesamiento del pago

    // Generar la factura en HTML
    $factura = "Nombre: $nombre\nDirección: $direccion\nTarjeta: $tarjeta\n\nProductos:\n";
    $totalFactura = 0;
    foreach ($_SESSION['cart'] as $producto) {
        $subtotal = $producto['price'] * $producto['quantity'];
        $totalFactura += $subtotal;
        $factura .= $producto['name'] . " - Q." . $producto['price'] . " x " . $producto['quantity'] . " = Q." . $subtotal . "\n";
    }
    $factura .= "\nTotal: Q." . $totalFactura;

    // Guardar la factura en la sesión
    $_SESSION['factura'] = $factura;

    // Redirigir a la página de factura
    header("Location: factura.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de Compra</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="style.css" href="">
    <style>
      
    </style>
</head>
<body>
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
    </div>
  </div>
</nav>
<nav style="padding-top: -10px; width: 100%; height: 60px; background: #6B503C; margin-left: -1px;"> </nav>

  
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <img style="align-items: center; width: 15%; height: 15%;" src="../img/logo1.png">
       <h2>Formulario de Pago</h2>
<br>
<div class="card text-start" id="identificacion">
    <h3>Identificación</h3>

    <form method="post" action="">
        <label for="email">Correo Electrónico:</label>
        <input type="email" class="form-control" id="email" name="email" required maxlength="50">
        <button type="button" onclick="confirmEmail()">Confirmar</button>
    </form>
</div>

<div class="card text-start hidden" id="informacionPersonal">
    <h3>Información Personal</h3>
    <form method="post" action="">
        <label for="nombre">Nombre:</label>
        <input type="text" class="form-control" id="nombre" name="nombre" required oninput="validateLetters(this)" maxlength="50">
        <label for="apellidos">Apellidos:</label>
        <input type="text" class="form-control" id="apellidos" name="apellidos" required oninput="validateLetters(this)" maxlength="50">
        <label for="telefono">Teléfono/Celular:</label>
        <input type="text" class="form-control" id="telefono" name="telefono" required oninput="validateNumbers(this)" maxlength="8">

    <h3>Facturación</h3>
    <form method="post" action="">
        <label for="tipoDocumento">Tipo de Documento:</label>
        <select class="form-control" id="tipoDocumento" name="tipoDocumento" required onchange="updateLabel()">
            <option value="CF">CF</option>
            <option value="NIT">NIT</option>
        </select>
        <label for="numeroDocumento" id="numeroDocumentoLabel">Número de Documento:</label>
        <input type="text" class="form-control" id="numeroDocumento" name="numeroDocumento" required readonly>
        <label for="nombreFactura">Nombre para la Factura:</label>
        <input type="text" class="form-control" id="nombreFactura" name="nombreFactura" required oninput="validateLetters(this)" maxlength="50">

<h3 id="hola">Pago con Tarjeta</h3>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" onsubmit="return validatePaymentForm()">
    <label for="tarjeta">Número de Tarjeta:</label>
    <input type="text" class="form-control" id="tarjeta" name="tarjeta" required oninput="validateCardNumber(this)">
    <label for="nombreTarjeta">Nombre y Apellidos de la Tarjeta:</label>
    <input type="text" class="form-control" id="nombreTarjeta" name="nombreTarjeta" required oninput="validateName(this)">
    <label for="fechaVencimiento">Fecha de Vencimiento (MM/YY):</label>
    <input type="text" class="form-control" id="fechaVencimiento" name="fechaVencimiento" required maxlength="5" oninput="validateExpiryDate(this)">
    <label for="cvv">CVV:</label>
    <input type="text" class="form-control" id="cvv" name="cvv" required maxlength="3" oninput="validateCVV(this)">
    <button type="submit" name="comprar">Comprar</button>
</form>
</div>

<script>
  // Ocultar todas las secciones excepto la de identificación al cargar la página
  document.addEventListener('DOMContentLoaded', function() {
    var identificacionSection = document.getElementById('identificacion');
    var informacionPersonalSection = document.getElementById('informacionPersonal');
    var facturacionSection = document.getElementById('facturacion');
    var envioSection = document.getElementById('envio');
    var retiroTiendaSection = document.getElementById('retiroTienda');
    var pagoTarjetaSection = document.getElementById('pagoTarjeta');
    var pagoEfectivoSection = document.getElementById('pagoEfectivo');

    // Mostrar solo la sección de identificación
    identificacionSection.classList.remove('hidden');
    informacionPersonalSection.classList.add('hidden');
    facturacionSection.classList.add('hidden');
    envioSection.classList.add('hidden');
    retiroTiendaSection.classList.add('hidden');
    pagoTarjetaSection.classList.add('hidden');
    pagoEfectivoSection.classList.add('hidden');
  });

  function confirmEmail() {
    var email = document.getElementById('email').value;
    if (!email) {
      alert('Por favor ingresa tu correo electrónico.');
      return;
    }
    document.getElementById('informacionPersonal').classList.remove('hidden');
  }

  function validateLetters(input) {
    input.value = input.value.replace(/[^a-zA-Z\s]/g, '');
  }

  function validateNumbers(input) {
    input.value = input.value.replace(/[^0-9]/g, '').substring(0, 8);
  }

  function confirmPersonalInfo() {
    var nombre = document.getElementById('nombre').value;
    var apellidos = document.getElementById('apellidos').value;
    var telefono = document.getElementById('telefono').value;
    if (!nombre || !apellidos || !telefono) {
      alert('Por favor completa todos los campos de información personal.');
      return;
    }
    document.getElementById('facturacion').classList.remove('hidden');
  }

  function updateLabel() {
    var tipoDocumento = document.getElementById('tipoDocumento').value;
    var label = document.getElementById('numeroDocumentoLabel');
    var numeroDocumentoInput = document.getElementById('numeroDocumento');
    
    switch (tipoDocumento) {
      case 'DPI':
        label.textContent = 'Número de DPI:';
        numeroDocumentoInput.removeAttribute('readonly');
        break;
      case 'Pasaporte':
        label.textContent = 'Número de Pasaporte:';
        numeroDocumentoInput.removeAttribute('readonly');
        break;
      case 'NIT':
        label.textContent = 'Número de NIT:';
        numeroDocumentoInput.setAttribute('maxlength', '10');
        numeroDocumentoInput.setAttribute('oninput', 'validateNumbers(this)');
        numeroDocumentoInput.removeAttribute('readonly');
        break;
      case 'CF':
        label.textContent = 'Número de Documento:';
        numeroDocumentoInput.value = 'CF';
        numeroDocumentoInput.setAttribute('readonly', 'readonly');
        break;
      default:
        label.textContent = 'Número de Documento:';
        numeroDocumentoInput.removeAttribute('readonly');
        break;
    }
  }

  function toggleForms() {
    var opcionEnvio = document.getElementById('opcionEnvio').value;
    var envioSection = document.getElementById('envio');
    var retiroTiendaSection = document.getElementById('retiroTienda');
    var pagoTarjetaSection = document.getElementById('pagoTarjeta');
    var pagoEfectivoSection = document.getElementById('pagoEfectivo');

    if (opcionEnvio === 'envio') {
      envioSection.classList.remove('hidden');
      retiroTiendaSection.classList.add('hidden');
      pagoTarjetaSection.classList.remove('hidden');
      pagoEfectivoSection.classList.add('hidden');
    } else if (opcionEnvio === 'retiro') {
      envioSection.classList.add('hidden');
      retiroTiendaSection.classList.remove('hidden');
      pagoTarjetaSection.classList.add('hidden');
      pagoEfectivoSection.classList.remove('hidden');
    }
  }

  function submitForm() {
    var numeroDocumento = document.getElementById('numeroDocumento').value;
    var nombreFactura = document.getElementById('nombreFactura').value;
    var opcionEnvio = document.getElementById('opcionEnvio').value;
    
    if (!numeroDocumento || !nombreFactura) {
      alert('Por favor completa todos los campos obligatorios.');
      return;
    }

    // Mostrar la sección correspondiente según la opción de envío seleccionada
    if (opcionEnvio === 'envio') {
      document.getElementById('envio').classList.remove('hidden');
      document.getElementById('pagoTarjeta').classList.remove('hidden');
    } else if (opcionEnvio === 'retiro') {
      document.getElementById('retiroTienda').classList.remove('hidden');
      document.getElementById('pagoEfectivo').classList.remove('hidden');
    }
  }

  function submitEnvio() {
    var departamento = document.getElementById('departamento').value;
    var municipio = document.getElementById('municipio').value;
    var direccion = document.getElementById('direccion').value;
    var destinatario = document.getElementById('destinatario').value;
    
    if (!departamento || !municipio || !direccion || !destinatario) {
      alert('Por favor completa todos los campos de envío.');
      return;
    }
    alert('Formulario de envío completado correctamente');
  }

  function submitRetiro() {
    var fechaRetiro = document.getElementById('fechaRetiro').value;
    var estadoRetiro = document.getElementById('estadoRetiro').value;
    
    if (!fechaRetiro || !estadoRetiro) {
      alert('Por favor completa todos los campos de retiro en tienda.');
      return;
    }
    alert('Formulario de retiro en tienda completado correctamente');
  }

  function submitPagoTarjeta() {
    var tarjeta = document.getElementById('tarjeta').value;
    var nombreTarjeta = document.getElementById('nombreTarjeta').value;
    var fechaVencimiento = document.getElementById('fechaVencimiento').value;
    var cvv = document.getElementById('cvv').value;
    
    if (!tarjeta || !nombreTarjeta || !fechaVencimiento || !cvv) {
      alert('Por favor completa todos los campos de pago con tarjeta.');
      return;
    }
    alert('Pago con tarjeta realizado correctamente');
  }

  function submitPagoEfectivo() {
    var estadoPagoEfectivo = document.getElementById('estadoPagoEfectivo').value;
    
    if (!estadoPagoEfectivo) {
      alert('Por favor selecciona el estado del pago en efectivo.');
      return;
    }
    alert('Pago en efectivo registrado correctamente');
  }


  function validateCardNumber(input) {
    input.value = input.value.replace(/\D/g, '').substring(0, 16);
}

function validateName(input) {
    input.value = input.value.replace(/[^a-zA-Z\s]/g, '');
}

function validateExpiryDate(input) {
    // Remover todos los caracteres no numéricos excepto '/'
    input.value = input.value.replace(/[^\d/]/g, '');
    // Asegurar que no haya más de 5 caracteres
    input.value = input.value.substring(0, 5);
}

function validateCVV(input) {
    input.value = input.value.replace(/\D/g, '').substring(0, 3);
}

function validatePaymentForm() {
    var tarjeta = document.getElementById('tarjeta').value;
    var nombreTarjeta = document.getElementById('nombreTarjeta').value;
    var fechaVencimiento = document.getElementById('fechaVencimiento').value;
    var cvv = document.getElementById('cvv').value;

    // Validar que solo se ingresen números en el número de tarjeta y CVV
    if (!/^\d+$/.test(tarjeta) || !/^\d+$/.test(cvv)) {
        alert('Por favor ingresa solo números en el número de tarjeta y CVV.');
        return false;
    }

    // Validar que nombre y apellidos solo contengan letras
    if (!/^[a-zA-Z\s]+$/.test(nombreTarjeta)) {
        alert('Por favor ingresa solo letras en el nombre y apellidos de la tarjeta.');
        return false;
    }

    // Validar formato de fecha de vencimiento (MM/YY)
    if (!/^(0[1-9]|1[0-2])\/\d{2}$/.test(fechaVencimiento)) {
        alert('Por favor ingresa el formato válido de fecha de vencimiento (MM/YY).');
        return false;
    }

    // Validar que el mes y el año sean válidos
    var today = new Date();
    var currentMonth = today.getMonth() + 1; // getMonth() devuelve el mes base 0, sumamos 1 para ajustarlo
    var currentYear = today.getFullYear() % 100; // Obtenemos solo los últimos dos dígitos del año actual

    var inputMonth = parseInt(fechaVencimiento.substring(0, 2), 10);
    var inputYear = parseInt(fechaVencimiento.substring(3), 10);

    if (inputYear < currentYear || (inputYear === currentYear && inputMonth < currentMonth)) {
        alert('La fecha de vencimiento ingresada es inválida.');
        return false;
    }

    return true;
}
</script>

 <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
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
    .skew-container {
      overflow: hidden;
      transform: skew(-20deg);
      width: 100%;
    }
    .skew-container .carousel-inner {
      transform: skew(20deg);
    }
    .card {
      max-width: 600px;
      padding: 20px;
      border: 1px solid white;
      background-color: white;
      border-radius: 8px;
      margin-bottom: 20px;
      text-align: left;
    }
    .card h3 {
      margin-top: 0;
    }
    .card label {
      display: block;
      margin-bottom: 5px;
    }
    .card input, .card select {
      width: 100%;
      padding: 8px;
      margin-bottom: 10px;
      box-sizing: border-box;
    }
    .card button {
      padding: 10px 15px;
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      background-color: #6B503C;
    }
    .hidden {
      display: none;
    }
  </style>

</body>
</html>
