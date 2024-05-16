<?php

//Modificar el programa anterior para que muestre “positivo”, 
//“negativo”o “cero” seguun sea el número n de entrada.

$numero = $_GET["numero"];

if ($numero > 0) {
    echo "El número es positivo";
} elseif ($numero < 0) {
    echo "El número es negativo";
} else {
    echo "El número es cero";
}

?>