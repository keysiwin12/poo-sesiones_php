<?php
    session_start();
    unset($_SESSION['sesion1']);
    echo "Se cerro la sesion";
    header("refresh:2 ; url = index.php ");

?>