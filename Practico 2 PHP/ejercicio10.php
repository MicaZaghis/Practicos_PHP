<?php
//Viendo el ejercicio anterior, 
//recibir un número n, descomponerlo y recomponerlo pero con las cifras al revés (ej. 25349 -> 94352)

$num = $_GET["num"];
$num_inv = 0;

while ($num > 0) {
    $resto = $num % 10;
    $num_inv = $num_inv * 10 + $resto;
    $num = (int) ($num / 10);
}

echo "El número invertido es: $num_inv";

?>