<?php
    session_start();

    // if(isset($_SESSION['sesion1'])) {
    //     echo "Bienvenido: " . $_SESSION['sesion1'] . "<br>";
    // }
    
    // else {
    //     echo "Aun no inicio sesion";
    // }

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
        <p>LOGIN</p>      
        <form action="login.php" method = "post">
            <img src="./imagenUsuario.jpg" alt="">
            <label for="usuario">
            Usuario:<input type="text" name = "usuario" id = "usuario"> <br>
            </label>
             
            <label for="contra">
                Contra: <input type="password" name = "contrasenia" id = "contra"> <br>               
            </label>     
            <input type="submit" value = "Iniciar Sesion" class = "boton">         
        </form>

        <form action="crear_usuario.php" method = "post">
            
            <input type="submit" value = "Crear Cuenta" class = "boton">
        </form>
    </div>

</body>
</html>