<?php
//Hacer un programa que reciba un número n y muestre la tabla de multiplicar del mismo

$num = $_GET["num"];

if (!is_numeric($num) || $num < 1) {
    echo "Número no válido";
    exit;
}

echo "Tabla de multiplicar del $num:<br>";

for ($i = 1; $i <= 10; $i++) {
    echo "$num x $i = ". ($num * $i). "<br>";
}

?>