<?php
/*Hacer un programa reciba un número n y calcule la sumatoria de los n primeros números mediante la fórmula

sum = (n *( n+1))/2
ej.  
Si n = 5 la sumatoria sería 1 + 2 + 3 + 4 + 5 = 15
sum = (5* (5+1))/2 = (5*6)/2 = 30/2 = 15
*/

$numero = $_GET["numero"];
$suma = ($numero * ($numero + 1)) / 2;

echo "El numero ingresado es: $numero". "<br>";
echo "La suma de todos los numeros anteriores es: $suma";
?> 