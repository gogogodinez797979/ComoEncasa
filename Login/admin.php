<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agora - Inicio de Sesión</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .navbar {
            background-color: #8B5E3C;
        }
        .navbar-brand, .nav-link, .search-bar {
            color: white !important;
        }
        .login-section {
            background-color: #D3B18B;
            padding: 30px;
            margin-top: 30px;
            border-radius: 10px;
        }
        .login-section input {
            border-radius: 20px;
        }
        .login-section .btn {
            border-radius: 20px;
        }
        .kitchen-image {
            max-height: 100%;
            width: 100%;
            object-fit: cover;
            border-radius: 10px;
        }
        .container-custom {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 80vh;
        }
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
          <img style="height: 150px; width: 150px; margin-left: 20px;" src="../img/logo.png" alt="" width="100" height="100">
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input style="margin-left: -1000px; width: 700px; border-radius: 25px;" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <a class="nav-link me-2" href="#" role="button" data-bs-toggle="" aria-expanded="false">
          <img style="height: 40px; width: 40px;" src="img/lupa.png" alt="" width="100" height="100">
        </a>

        <div class="d-flex">
          
          </a>
         
           <a href="carrito/cart.php" class="me-1">
            
          </a>
        </div>


      </form>
    </div>
</nav>
<nav style="padding-top: -10px; width: 100%; height: 60px; background: #6B503C; margin-left: -1px;"> </nav>


<div class="container-fluid container-custom" s>
    <div class="row w-100">
        <div class="col-md-4">
            <div class="login-section">
                <h3>Inicio de Sesión</h3>
                <form action="login.php" method="post">
                    <div class="form-group">
                        <label for="email">Correo Electrónico</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Contraseña</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Iniciar Sesión</button>
                </form>
            </div>
        </div>
        <div class="col-md-8 d-none d-md-block">
            <img src="../img/lo.jpg" alt="Kitchen Image" class="kitchen-image">
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
