<?php
//Hacer un programa que reciba un número decimal 
//y muestre la parte entera por un lado y la parte decimal por otro lado.

$num = $_GET['num'];

$parte_entera = intval($num); //parte entera
$parte_decimal = fmod($num, 1); //parte decimal

echo "Parte entera: $parte_entera<br>";
echo "Parte decimal: $parte_decimal";
?>