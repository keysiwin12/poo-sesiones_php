<?php
    include "persona.php";
    include "vendedor.php";

    $persona1 = new Persona;

    $persona1->__set("nombre","Andre");
    $persona1->__set("apellido","Espinoza");
    

    echo "soy la nueva persona y mi nombre es : " . $persona1->__get("nombre") . " <br>";
    echo "mi apellido es : " . $persona1->__get("apellido") . "<br>";

    $vendedor1 = new Vendedor();

    $vendedor1->edadHijo(1992);


    
?>