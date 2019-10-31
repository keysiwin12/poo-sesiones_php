<?php
    $user = "root";
    $pass = "1234";

    
    session_start();
    
    if($_POST['nombre'] == $user && $_POST['contra'] == $pass) {
        $_SESSION ['sesion1'] = 'Administrador';
        echo "Sesion iniciada";
    }

    else {
        echo "usuario o contra incorrecta";
    }



?>