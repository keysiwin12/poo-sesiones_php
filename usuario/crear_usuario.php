<?php 
include ("conectar.php");
$con = conectar();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="estilos.css">
    <title>Document</title>
</head>
<body>
    <div class = "inicio">
        <p>CREAR CUENTA</p>
        <form action="#" method = "post">
        <img src="./imagenUsuario.jpg" alt="">
            <label for="usuario">
            Usuario:<input type="text" name = "usuario" id = "usuario"> <br>
            </label>
             
            <label for="contra">
                Contra: <input type="password" name = "contrasenia" id = "contra"> <br>               
            </label>     
            <input type="submit" value = "Crear Cuenta" class = "boton">
        </form>
    </div>

    <?php


    if($_POST) {
       $nuevoUsuario = $_POST['usuario'];
       $contraNuevoUsuario = $_POST['contrasenia'];
       
       mysqli_query($con,"insert into usuario(nombreUsuario,contraUsuario) values('$nuevoUsuario','$contraNuevoUsuario')") or die (mysql_error());
       echo "Usuario creado";
    }

    


    ?>
</body>
</html>