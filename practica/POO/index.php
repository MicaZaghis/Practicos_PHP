<?php
require_once("persona.php"); 
//variables de instancia.No se modifican en la clase
$jose = new Persona ();
$jose -> nombre = "jose";
$jose -> hablar("Politica");
$jose -> setTelefono("123445");
//agrego el dato con set

var_dump ($jose -> edad);
echo $jose -> getTelefono(); //lo obtengo con get

Persona:: $idiomas = "Español";
echo Persona:: $idiomas;

$sofia = new Persona ();
$sofia -> nombre = "sofia";
$sofia -> hablar("Musica");

echo $sofia -> nombre;
Persona :: $idiomas = "ingles";
echo Persona:: $idiomas;
//variables de clases, si se pueden modificar

?>