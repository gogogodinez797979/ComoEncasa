<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preguntas Frecuentes - Agora</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #F8F8F5;
            color: #333;
            font-family: 'Arial', sans-serif;
        }
        .header {
            background-color: #C2B199;
            color: #fff;
            padding: 2rem 0;
            text-align: center;
        }
        .header h1 {
            font-size: 2.5rem;
            margin-bottom: 0;
        }
        .content {
            padding: 3rem 1.5rem;
        }
        .content h2 {
            color: #9B7A59;
            margin-top: 1.5rem;
            border-bottom: 2px solid #9B7A59;
            padding-bottom: 0.5rem;
            font-size: 1.75rem;
        }
        .content p {
            font-size: 1rem;
            line-height: 1.6;
        }
        .btn-primary {
            background-color: #9B7A59;
            border-color: #9B7A59;
            border-radius: 0.375rem;
            font-size: 0.75rem;
            padding: 0.5rem 1rem;
            text-transform: uppercase;
        }
        .btn-primary:hover {
            background-color: #7A5D3D;
            border-color: #7A5D3D;
        }
        .footer {
            background-color: #9B7A59;
            color: #fff;
            padding: 1.5rem 0;
            text-align: center;
            font-size: 0.875rem;
        }
        .container {
            max-width: 900px;
        }
        .accordion .card {
            border: none;
            margin-bottom: 1rem;
            border-radius: 0.5rem;
        }
        .accordion .card-header {
            background-color: #9B7A59;
            color: #fff;
            font-size: 1.25rem;
            font-weight: bold;
            border-bottom: none;
            border-radius: 0.5rem 0.5rem 0 0;
        }
        .accordion .card-body {
            background-color: #F8F8F5;
        }
    </style>
</head>
<body>
    <header class="header">
        <div class="container">
            <h1>Preguntas Frecuentes - Agora</h1>
        </div>
    </header>

    <main class="content">
        <div class="container">
            <div class="section">
                <h2>Preguntas Frecuentes</h2>
                <div id="accordion">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    ¿Cómo puedo realizar una compra en línea?
                                </button>
                            </h5>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                                Para realizar una compra en línea, visita nuestra tienda en línea, selecciona los productos que deseas, agrégales a tu carrito de compras y procede a pagar a través de nuestro sistema de pago seguro. Una vez completada la compra, recibirás un correo de confirmación con los detalles de tu pedido.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    ¿Cuáles son los métodos de pago aceptados?
                                </button>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body">
                                Aceptamos varios métodos de pago, incluyendo tarjetas de crédito y débito, transferencias bancarias y pagos a través de plataformas de pago en línea como PayPal. Todos los pagos se procesan a través de un sistema seguro.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    ¿Qué opciones de envío están disponibles?
                                </button>
                            </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="card-body">
                                Ofrecemos varias opciones de envío, incluyendo estándar, exprés y recogida en tienda. Los costos y tiempos de entrega varían según la opción elegida y la ubicación de envío. Puedes seleccionar tu opción de envío al momento de realizar la compra.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingFour">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    ¿Cómo puedo realizar una devolución o cambio?
                                </button>
                            </h5>
                        </div>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                            <div class="card-body">
                                Si deseas realizar una devolución o cambio, por favor contacta con nuestro servicio de atención al cliente dentro de los 30 días posteriores a la recepción de tu pedido. Te proporcionaremos instrucciones detalladas sobre cómo proceder. Los productos deben estar en su estado original y sin usar.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingFive">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    ¿Cómo puedo contactar con el servicio de atención al cliente?
                                </button>
                            </h5>
                        </div>
                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                            <div class="card-body">
                                Puedes contactar con nuestro servicio de atención al cliente a través de nuestro correo electrónico <a href="mailto:atencion@agora.com">atencion@agora.com</a>, llamándonos al número +502 1234-5678 o usando el formulario de contacto en nuestra página web. Estamos disponibles para asistirte con cualquier pregunta o inquietud que puedas tener.
                            </div>
                        </div>
                    </div>
                </div>
                <br>
            </div>
            <a href="index.html" class="btn btn-primary">Volver a la página principal</a>
        </div>
    </main>

    <footer class="footer">
        <p>&copy; 2024 Agora. Todos los derechos reservados.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
