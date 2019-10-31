<?php
    session_start();

    if(isset($_SESSION['sesion1'])) {
        echo "Bienvenido: " . $_SESSION['sesion1'] . "<br>";
    }

    else {
        echo "Aun no inicio sesion";
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
    <form action="login.php" method = "post">
        Usuario<input type="text" name = "nombre"> <br>

        Contra<input type="password" name = "contra"> <br>

        <input type="submit" value = "Ingresar">
    </form>

    <?php
        $a= null;

        if (isset($a)) {
            echo "si";
        }

        else {
            echo "no";
        }
    ?>
</body>
</html>