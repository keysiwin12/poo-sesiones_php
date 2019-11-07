<?php
    include ("conectar.php");
    $con = conectar();

    session_start();
    
    $consulta = "SELECT mensaje FROM chat2 order by idMensaje desc ";
    
    $rconsulta = mysqli_query($con,$consulta) or die (mysql_error());
    
    foreach($rconsulta as  $valores) {
        echo $_SESSION['sesion1'] . " : " . "$valores[mensaje] <br>";
    }

    header("refresh:3 ; consultar.php");

?>

