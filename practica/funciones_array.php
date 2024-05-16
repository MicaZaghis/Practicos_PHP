<?php
$alumnos = ["Mica","Pia","Mojito"];
$datos = [
    "Nombre" => "Mica",
    "Apellido" => "Zaghis",
    "edad" => "29"
];
//ordena alfabeticamente
asort($datos); //asendente
arsort($alumnos); //descendente
var_dump(count($alumnos));
var_dump(count($datos));
//------------------------------------------------------

$alumnos = ["Mica","Pia","Mojito"];
$datos = [
    "Nombre" => "Mica",
    "Apellido" => "Zaghis",
    "edad" => "29"
];

$index = array_search("Mojito",$alumnos);
$key = array_search("29",$datos);

var_dump($alumnos[$index]);
var_dump($datos[$key]);

//----------------------------------------
$alumnos = ["Mica","Pia","Mojito"];
$datos = [
    "Nombre" => "Mica",
    "Apellido" => "Zaghis",
    "edad" => "29"
];

$alumnos_correccion = array_replace($alumnos,[
    0 => "Mica",
    1 => "Jose"

]);
$datos_correccion = array_replace($datos,[
    "Apellido" => "Zaghis"
]);

var_dump($alumnos_correccion);
var_dump($datos_correccion);

?>