<?php
    class Persona {
        private $nombre = "";
        private $apellido = "";
        public static $miStatic = 2019;


        public function __construct() {
            $this->nombre = "";
            $this->apellido = "";
        }

        public function __set($atributo,$valor) {
            $this->$atributo = $valor;
        }


        public function __get($propiedad) {
            return $this->$propiedad;
        }       

        public function obtenerEdad($f) {
            echo "La edad es : " . $this->fecha($f) . "<br>";
        }   

        public function fecha($f) {
            return SELF::$miStatic - $f;
        }

    }


?>