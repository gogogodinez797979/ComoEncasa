<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cotizaciones - Agora</title>
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
            border-radius: 0.375rem; /* Bordes redondeados */
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
        .form-group label {
            font-weight: bold;
        }
        .card {
            border: none;
            border-radius: 0.5rem;
            margin-bottom: 1.5rem;
        }
        .card-header {
            background-color: #9B7A59;
            color: #fff;
            font-size: 1.25rem;
            font-weight: bold;
            border-bottom: none;
            border-radius: 0.5rem 0.5rem 0 0;
        }
        .card-body {
            background-color: #F8F8F5;
        }
        .form-control {
            border-radius: 0.375rem;
        }
    </style>
</head>
<body>
    <header class="header">
        <div class="container">
            <h1>Cotizaciones - Agora</h1>
        </div>
    </header>

    <main class="content">
        <div class="container">
            <div class="section">
                <h2>Solicita una Cotización</h2>
                <p>Para recibir una cotización personalizada para nuestros productos, por favor completa el siguiente formulario. Nos pondremos en contacto contigo a la brevedad con los detalles de tu solicitud.</p>

                <form action="#" method="post">
                    <div class="form-group">
                        <label for="name">Nombre</label>
                        <input type="text" id="name" name="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Correo Electrónico</label>
                        <input type="email" id="email" name="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Teléfono</label>
                        <input type="tel" id="phone" name="phone" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="product">Producto de Interés</label>
                        <select id="product" name="product" class="form-control">
                            <option value="taza">Taza de Café</option>
                            <option value="cuadro">Cuadro de Manos</option>
                            <!-- Agregar más opciones según los productos -->
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="quantity">Cantidad</label>
                        <input type="number" id="quantity" name="quantity" class="form-control" min="1">
                    </div>
                    <div class="form-group">
                        <label for="message">Mensaje Adicional</label>
                        <textarea id="message" name="message" class="form-control" rows="4"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar Solicitud</button>
                </form>
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
