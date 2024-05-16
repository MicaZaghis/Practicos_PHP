<?php
//Hacer un programa que reciba dos números p y q 
//y muestre la suma de todos los números que hay entre ellos (incluyéndolos).

$p = $_GET["p"];
$q = $_GET["q"];

if ($p > $q) {
    $temp = $p; //temp para asignar un valor temporal
    $p = $q;
    $q = $temp;
}

$suma = 0;
for ($i = $p; $i <= $q; $i++) {
    $suma += $i;
}

echo "La suma de los números entre $p y $q es: $suma";

?>