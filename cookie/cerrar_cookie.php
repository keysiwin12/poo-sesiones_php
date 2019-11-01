<?php
    // cierra la sesion de la cookie
    unset($_COOKIE['nombreUsuario']);
    setcookie('nombreUsuario',null, -1);
    setcookie('password',null, -1);
    echo "Cerraste Sesion";

    header("refresh: 1 ; url = index.php")
   
?>