<?php
//Hacer un programa en php que reciba un número n y muestre “positivo” si es mayor que 0 
//o “no positivo” si es menor que 0;

$numero = $_GET["numero"];

if ($numero > 0) {
    echo " El numero es positivo";
} else {
    echo "El numero no es positivo";
}

?>