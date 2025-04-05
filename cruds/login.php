<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Ajustes de estilo personalizados */
        html,
        body,
        .container-fluid,
        .row,
        .col-md-4,
        .col-md-8 {
            height: 100%;
        }
        /* Estilos para el formulario */
        #email,
        #password,
        button[type="submit"] {
            border-radius: 25px;
        }
        button[type="submit"] {
            background-color: #ffffff;
            color: black;
            border: none;
        }
        .login-form {
            background-color: #C2B199;
        }
        /* Estilo para el botón de regresar */
        .btn-regresar {
            border-radius: 25px;
            background-color: #C2B199;
            color: black;
            border: none;
        }
        .btn-regresar:hover {
            background-color: #b4a787;
            color: black;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav style="margin-left: -11px; width: 100vw; z-index: 1000; position: sticky; top: 0;" class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div style="background: #9B7A59; height: 150px;margin-top: px;" class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          
        </li>
        <li class="nav-item">
          
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <img style="height: 40px; width: 40px;" src="img/menu.png" alt="" width="100" height="100">
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <h1 style="width: 100px; margin-left: 30px; margin-top: 50px; color: white;">AGORA</h1>
        </li>
      </ul>
    </div>
  </div>
</nav>
<nav style="padding-top: -10px; width: 100%; height: 60px; background: #6B503C; margin-left: -1px;"> </nav>


<div class="container-fluid">
    <div class="row">
        <!-- Columna para el formulario (lado derecho) -->
        <div class="col-md-4 d-flex align-items-center justify-content-center login-form" style="padding: 50px;">
            <div style="max-width: 300px;">
                <h2 class="mb-4 text-center">Iniciar Sesión</h2>
                <form action="procesar_login.php" method="POST">
                    <div class="mb-3">
                        <label for="email" class="form-label visually-hidden">Correo Electrónico:</label>
                        <input type="email" class="form-control form-control-sm" id="email" name="email" placeholder="Correo Electrónico" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label visually-hidden">Contraseña:</label>
                        <input type="password" class="form-control form-control-sm" id="password" name="password" placeholder="Contraseña" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm d-block mx-auto">Iniciar Sesión</button>
                    <!-- Botón para regresar al login -->
                    <a href="index.php" class="btn btn-regresar btn-sm d-block mx-auto mt-3">Regresar</a>
                </form>
            </div>
        </div>

        <!-- Columna para la imagen (lado izquierdo) -->
        <div class="col-md-8 d-none d-md-block" style="background-color: #f2f2f2;">
            <!-- Puedes colocar aquí tu imagen -->
            <img src="img/login.jpg" alt="Imagen" class="img-fluid w-100 h-100">
        </div>
    </div>
</div>


<!-- Bootstrap Bundle JS (incluye Popper) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
