<?php
/*Hacer un programa que muestre el cociente y el resto de dividir un número por 10. 
Luego hacer lo mismo con el cociente (es decir dividirlo por 10 y sacar el cociente y el resto), 
y así siguiendo hasta que este sea 0;
*/

$num = $_GET["num"];

while ($num > 0) {
    $cociente = (int) ($num / 10);
    $resto = $num % 10;
    echo "Dividiendo $num entre 10: Cociente = $cociente, Resto = $resto<br>";
    $num = $cociente;
}

?>