<?php 

    session_start();
    // session_destroy();  // cierra todas las sesiones
    // echo "Se cerraron todas las sesiones " ;

    unset($_SESSION['sesion1']); //cierra solo esta sesion
    echo "Se cerro sesion";
    header("refresh:2 ; url = index.php ");

?>