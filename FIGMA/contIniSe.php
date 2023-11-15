<?php

    if(!empty($_POST["btnIngresar"])){
        if(empty($_POST["usuario"]) and empty($_POST["password"]))
        {
            echo '<div class="alert">CAMPOS VACIOS</div>';
        }
        else
        {
            $usuario=$_POST["usuario"];
            $clave=$_POST["password"];
            $sql=$conn->query("select * from regusuarios where usuario='$usuario' and contraseña='$clave'");
            if($datos=$sql->fetch_object())
            {
                header("Location:cursos.html");
            }
            else
            {
                echo '<div class="alert">Acceso Denegado</div>';
            }
        }
    }
?>