<?php

//Hacer un programa que calcule el promedio de cuatro notas ingresadas

$nota1 = $_GET["nota1"];
$nota2 = $_GET["nota2"];
$nota3 = $_GET["nota3"];
$nota4 = $_GET["nota4"];

$suma = $nota1 + $nota2 + $nota3 + $nota4;
$promedio = $suma /4; 

echo "Nota 1 = $nota1 <br> Nota 2 = $nota2 <br> Nota 3 = $nota3 <br> Nota 4 = $nota4<br>";
echo "El promedio de las notas ingresadas es $promedio. <br>"; 

?>