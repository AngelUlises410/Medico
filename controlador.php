<?php

if (!empty($_POST["btningresar"])) {
    if(!empty($_POST["usuario"]) and empty($_POST["password"])){
            echo '<div class="alert alert-danger">los campos estan vacios</div>';
    } else {

        $usuario=$_POST["usuario"];
        $clave=$_POST["password"];
        $sql=$conexion->query("SELECT * FROM usuario WHERE usuario='$usuario' and clave='$clave' ");
        if ($dato=$sql->fetch_object()) {
            header("location:inicio.php");
        }else{
            echo '<div class="alert alert-danger">ACCESO DENEGADO </div>';
        }
    }

}


?>