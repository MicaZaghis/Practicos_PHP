<?php
/*
Hacer un programa que reciba la cantidad de horas y muestre a cuantos minutos y segundos equivale
ej. 4 horas
240 minutos
14400 segundos
*/
$horas = $_GET["horas"];

$minutos = $horas * 60;
$segundos = $minutos * 60;

echo "$horas horas equivale a $minutos minutos y $segundos segundos";

?>