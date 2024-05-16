<?php

//Hacer un programa que reciba dia, mes y anio de nacimiento y dia, 
//mes y anio actual y calcule la edad exacta de la persona

$diaNacimiento = $_GET["diaNacimiento"];
$mesNacimiento = $_GET["mesNacimiento"];
$anioNacimiento = $_GET["anioNacimiento"];

$diaActual = $_GET["diaActual"];
$mesActual = $_GET["mesActual"];
$anioActual = $_GET["anioActual"];

// Crear objetos DateTime para la fecha de nacimiento y la fecha actual
$fechaNacimiento = DateTime::createFromFormat("d-m-Y", "$diaNacimiento-$mesNacimiento-$anioNacimiento");
$fechaActual = DateTime::createFromFormat("d-m-Y", "$diaActual-$mesActual-$anioActual");

// Calcular la diferencia entre las dos fechas
$diferencia = $fechaActual->diff($fechaNacimiento);
//diff para calcular la diferencia entre las dos fechas

// Mostrar la edad exacta
echo "La edad exacta es: $diferencia->y años, $diferencia->m meses y $diferencia->d días";

?>