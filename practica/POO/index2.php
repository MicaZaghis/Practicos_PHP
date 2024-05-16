<?php
require_once("autocarga.php");

$autoCarga = new AutoCarga();
$autoCarga -> cargarRutas();

$cliente = new Cliente();
$persona = new Persona();
$cliente -> nombre = "Jose";
$cliente -> comer();
$cliente -> saludar($empleado);
$empleado = new Empleado();
$proveedor = new Proveedor();
$empleado -> nombre = "Luis";

//clases anónimas
$claseAnonima = new class{
    public $nombre;

    function suma(){
        echo 10+20;
    }
};

echo $cliente -> nombre;

?>