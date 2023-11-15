<?php
    if(!empty($_POST["btnregister"]))
    {
        if(empty($_POST["nombre"])
            and empty($_POST["usuario"])
            and empty($_POST["email"])
            and empty($_POST["contrasenia"]))
        {
            echo '<div class="alert">CAMPOS VACIOS</div>';
        }

        else{
            $nombre=$_POST["nombre"];
            $usuario=$_POST["usuario"];
            $correo=$_POST["email"];
            $contrasenia=$_POST["contrasenia"];

            $sql=$conn->query("insert into regusuarios (nombre,usuario,correo,contraseña) values ('$nombre', '$usuario', '$correo', '$contrasenia')");

            header("Location:iniSe.php");


            /*if($datos=$sql->fetch_object())
            {
                
            }
            /*else
            {
                echo '<div class="alert">Error</div>';
            }*/
        }
    }
?>