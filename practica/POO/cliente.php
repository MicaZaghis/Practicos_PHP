<?php
require_once("persona.php");
require_once("empleado.php");

class Cliente extends Persona{

    public function __construct(
        public bool $esFrecuente = false,
        public string $correo = "",
    )
    {}

    function comer(){
        $this-> setTelefono("123456779");
        echo $this ->getTelefono();
    }

    function saludar(Empleado $empleado){
        echo "felicidades chef", $empleado ->nombre;
    }
}


?>