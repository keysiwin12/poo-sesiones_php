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
    <form action="#" method = "POST">
        <div class = "inbox">
            <iframe src="consultar.php" frameborder="2"></iframe>          
        </div>

        <input type="text" name ="msm">
        <input type="submit" value = "Enviar">
    </form>
    <br>
    <br>
    <form action="cerrar_sesion.php">
        <input type="submit" value = "Cerrar Sesion">
    </form>

    <?php
    
    if($_POST) {
        $mensaje = $_POST['msm'];
        mysqli_query($con,"insert into chat2(mensaje)value('$mensaje')")  or die (mysql_error());  
    }

    ?>
</body>
</html>