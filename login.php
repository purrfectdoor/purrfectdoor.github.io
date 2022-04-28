<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Login de Purrfect Door
    </title>
    <!-- Conectamos archivo css local -->
    <link rel="stylesheet" href="css/principal.css">
    <!-- Obtenemos desde Google Fonts la fuente Roboto -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300&display=swap" >
    <!-- Conectamos fontawesome -->
    <script src="https://kit.fontawesome.com/79407adf3f.js" crossorigin="anonymous"></script>
    <!-- Conectamos archivo js local -->
    <script src="js/principal.js"></script>
</head>
<body>
    <div class="container">
        <nav class="navbar">
            <a class="logowtext">
                    <b>Purrfect</b><img class="logo" src="img/logo.png"></img> <b>Door</b>
            </a>
            <div class="menu">
                <div class="menu-line"></div>
                <div class="menu-line"></div>
                <div class="menu-line"></div>
            </div>
            <ul class="nav-list">
                <li class="list-item no-responsive">
                    <a href="index.html" class="activa">
                        Inicio
                    </a>
                </li>
                <li class="list-item no-responsive">
                    <a href="#">
                        Dashboard
                    </a>
                </li>
                <li class="list-item no-responsive">
                    <a href="proyecto.html">
                        Proyecto
                    </a>
                </li>
                <li class="list-item no-responsive">
                    <a href="https://github.com/purrfectdoor/purrfectdoor.github.io">
                        Repositorio
                    </a>
                </li>
                <li class="list-item no-responsive">
                    <a href="contacto.html">
                        Contacto
                    </a>
                </li>
            </ul>
        </nav>
        <div class="form">
            <div class="banner">
            <div class="back-banner"></div>
                <div class="section-banner">
                    <form action="validar.php" method="post">
                        <h1>
                            Login dashboard
                        </h1>
                        <p>
                            Usuario
                        </p>
                        <input type="text" placeholder="Ingrese su nombre" name="usuario">
                        <p>
                            Contraseña
                        </p>
                        <input type="password" placeholder="Ingrese su contraseña" name="contrasena">
                        <input type="submit" value="Ingresar">
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>