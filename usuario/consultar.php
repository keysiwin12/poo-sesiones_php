<?php
    include "conectar.php";
    $con = conectar();

    $consulta = "SELECT * FROM usuario ";
    $lConsulta = mysqli_query($con,$consulta) or die (mysqli_error());

    foreach ($lConsulta as $valores) {

      if($_POST['usuario'] == "$valores[nombreUsuario]" && $_POST['contrasenia'] == "$valores[contraUsuario]") {       
        
        echo "Sesion iniciada";
      }
      else {
          echo "contra incorrecta";
      }
    }

?>