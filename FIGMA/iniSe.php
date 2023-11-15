<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aprende Fácil | Inicio Sesión</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" media="screen" href="estiloIniSe.css">
        <script type="text/javascript" src="inicSe.js"></script>
    </head>

    <body>
        <div class="container">
            <h1 class="title">Iniciar Sesión</h1>
            <form method="post">    
                    //onsubmit="mostrarAlerta(event)               
                <div class="form-group">
                    <label for="usuario">Usuario:</label>
                    <input type="usuario" id="usuario" name="usuario" class="input1" required>
                </div>
                <div class="form-group">
                    <label for="contrasena">Contraseña:</label>
                    <input type="password" id="password" name="password" class="input1" required>
                </div>

                <?php
                    include("con_db.php");
                    include("contIniSe.php");
                ?>

                <input type="submit" name="btnIngresar" value="Iniciar Sesión" class="input2">

                <br>
                <p>¿Aún no tienes cuenta?</p>

                <button type="button" class="clasbtn2" onclick="location.href='registrate.php'">Crear Cuenta</button>
            </form>
        </div>
    </body>

</html>
