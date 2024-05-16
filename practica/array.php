<?php

$array= ["Mica", "Pia", "Mojito"];
$nombre = "Mica";

echo $array[2];

foreach($array as $index => $nombre){
    echo "Mi nombre es: ",$nombre, "index: $index";
//index sirve para saber la posicion en la que se encuentra
}

//arreglos asociativos 
$datos = [
        "nombre" => "Mica",
        "apellido" => "Zaghis",
        "edad" => "29"
];

foreach($datos as $key => $valor){
    echo $valor;
} 
//agregar datos de un arreglo
$alumnos = ["Mica","Pia","Mojito"];
$datos = [
    "Nombre" => "Mica",
    "apellido" => "Zaghis",
    "edad" => "29"
];

array_push($alumnos,"Luis"); //agrega luis a alumnos
$datos["Colonia"] = "Alegria";

var_dump($alumnos);
var_dump($datos);

//eliminar 
$alumnos = ["Mica","Pia","Mojito"];
$datos = [
    "Nombre" => "Mica",
    "apellido" => "Zaghis",
    "edad" => "29"
];

unset($alumnos[1]); //elimina Pia
unset($datos["apellido"]);

var_dump($alumnos);
var_dump($datos);

//modificar
$alumnos = ["Mica","Pi","Mojito"];
$datos = [
    "Nombre" => "Mica",
    "apellido" => "Zaghi",
    "edad" => "29"
];

$alumnos[1] = "Pia";
$datos["apellido"] = "Zaghis";

var_dump($alumnos);
var_dump($datos);
?>