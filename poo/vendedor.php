<?php

    class Vendedor extends Persona {
        private $codInterno;
        private $caja;

        public function __construct() {
            $this->codInterno = 0;
            $this->caja = "";
        }


        public function edadHijo($fe) {
            $tiempo = parent :: fecha($fe) - 20;
            echo "Edad hijo es : " . $tiempo . "<br>" ;
        }


        

    }

?>