<?php
//Hacer una función que reciba un número n y retorne true si es par y false si es impar

$numero = $_GET["numero"];

if ($numero % 2 == 0) {
    echo "True";
} elseif ($numero % 2 !== 0) {
    echo "False";
} else {
    echo "Numero incorrecto";
}
?>
