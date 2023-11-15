<html>
    <head>
        <meta charset="UTF-8">
        <title>Aprende Fácil | Registrate</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" media="screen" href="estiloReg.css">
        <script type="text/javascript" src="registro.js"></script>
    </head>

    <body>
        <div class="container">
            <h1 class="title">Registrate</h1>
            <form method="post">  //onsubmit="mostrarAlerta(event)" 
                <div class="form-group">
                    <label for="nombre">Nombre completo:</label>
                    <input type="text" id="nombre" name="nombre" required>
                </div>
                <div class="form-group">
                    <label for="usuario">Usuario:</label>
                    <input type="usuario" id="usuario" name="usuario" required>
                </div>
                <div class="form-group">
                    <label for="email">Correo electrónico:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="contrasena">Contraseña:</label>
                    <input type="password" id="contrasenia" name="contrasenia" required>
                </div>

                <?php
                    include("con_db.php");
                    include("contReg.php");
                ?>

                <div class="form-group2">
                    <input type="checkbox" id="terminos" name="terminos">
                    <label for="terminos">Quiero recibir ofertas especiales, recomendaciones y consejos de aprendizaje.</label>                    
                </div>
                <input type="submit" name="btnregister" value="Registrarse">
                <br>
                <p class="clasp">Al registrarte, aceptas nuestras Condiciones de uso y nuestra Politica de privacidad.</p>
            </form>
        </div>
    </body>
</html>