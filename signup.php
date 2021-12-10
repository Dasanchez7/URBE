<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/paradox-onlylogo.png">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/login.css">
    <title>Paradox Movies</title>
</head>


<body>
    <header class="site-header"> <!-- se nombra header (logotipo, nombre y navegacion) porque es el contenido superior de la pag--> <!-- se seleccionó 2 clases, id solo se puede seleccionar 1 solo -->
        <div class="contenedor contenido-header"> <!--se nombra div para agrupar el contenido pero complementa al header--> <!-- flex solo tomara en cuenta al primer nivel de hijos (barra y venta de casas y depar) -->
            <div class="barra">
                <a href="index.html">
                    <img src="img/paradox-logo.png" alt="Logotipo de bienes raices">
                </a>
                <nav class="navegacion">
                    <a href="anuncios.html">Anuncios</a>
                    <a href="peliculas.html">Peliculas</a>
                    <a target="_self"href="contacto.html">Contacto</a> <!-- se abre en la misma pestaña -->
                    <a target="_blank" href="login.html">Iniciar Sesión</a> <!-- se abre en una pestaña nueva -->
                </nav>
            </div>
        </div> <!-- fin del contenedor -->
    </header>

    <div class="contenedor__todo">
        <div class="caja__trasera">
            <div class="caja__trasera-login">
                <h3>¿Ya tienes una cuenta?</h3>
                <p>Inicia sesión para entrar en la página</p>
                <button id="btn__iniciar-sesion">Iniciar Sesión</button>
            </div>
            <div class="caja__trasera-register">
                <h3>¿Aún no tienes una cuenta?</h3>
                <p>Regístrate para que puedas iniciar sesión</p>
                <button id="btn__registrarse">Regístrarse</button>
            </div>
        </div>


        <div class="contenedor__login-register">
                        <!--Login-->
            <form action="login.php" class="formulario__login" method="post">
                <h2>Iniciar Sesión</h2>
                <input type="text" name="email" placeholder="Correo Electronico">
                <input type="password" name="password" placeholder="Contraseña">
                <button>Entrar</button>
            </form>

            <!--Register-->
        
            <form action="agregar_usuario.php" class="formulario__register" method="post">
                <h2>Regístrarse</h2>
                <input type="text" name="email" placeholder="Email">
                <input type="text" name="cedula" placeholder="Cedula">
                <input type="text" name="nombre" placeholder="Nombre">
                <input type="text" name="telef" placeholder="Telefono">
                <input type="password" name="password" placeholder="Contraseña">
                <input type="password" name="password2" placeholder="Confirmar Contraseña">
                <button>Regístrarse</button>
            </form>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>