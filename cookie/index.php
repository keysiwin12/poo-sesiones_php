<?php
    if(isset($_COOKIE['nombreUsuario'])) {
        echo "Bienvenido usuario : " . $_COOKIE['nombreUsuario'] . " porque usas cookies?";
        echo "<br> ". "puedo ver tu contraseña".$_COOKIE['password'];
    }

    else {
        echo "no hay cookie iniciada ";
    }
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
    <form action="login_cookie.php" method = "post">
        Usuario<input type="text" name = "nombre"> <br>
        Contraseña<input type="password" name = "contra"> <br>
        <input type="submit" value = "Ingresar">
    </form>

    <form action="cerrar_cookie.php" method = "post">
        <input type="submit" value = "Cerrar Sesion">
    </form>
</body>
</html>