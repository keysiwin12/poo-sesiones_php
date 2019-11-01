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
    <title>Document</title>
</head>
<body>
    <form action="#" method = "post">
        Usuario<input type="text" name = "usuario"> <br>
        contra <input type="password" name = "contrasenia"> <br>
        <input type="submit" value = "Crear Cuenta">
    </form>

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