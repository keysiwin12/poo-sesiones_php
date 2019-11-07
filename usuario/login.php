<?php
    session_start();
    include "conectar.php";
    $con = conectar();

    $consulta = "SELECT * FROM usuario ";
    $lConsulta = mysqli_query($con,$consulta) or die (mysqli_error());

    foreach ($lConsulta as $valores) {

      if($_POST['usuario'] == "$valores[nombreUsuario]" && $_POST['contrasenia'] == "$valores[contraUsuario]") {       
        $_SESSION ['sesion1'] = "$valores[nombreUsuario]";
        header("refresh:2 ; url = chat.php ");
        
      }

      else {
          echo "contra o usuario  incorrecta";
      }
    }

?>