<?php
/*Hacer un programa que muestre los números
Del 1 al 10
Del 1 al 10 pero de 2 en 2
Del y al 100 pero de 10 en 10
Del 10 al 1
Que inicie en 1 y vaya duplicando el valor sin pasarse de 10000 (1,2,4,8,….)
Que empiece en 100 y vaya restando 1, después 2, después 3 y asi siguiendo hasta volverse negativo (100,99,97,94….)
*/

echo "Del 1 al 10:<br>";
for ($i = 1; $i <= 10; $i++) {
    echo $i. "<br>";
}

echo "<br>Del 1 al 10 de 2 en 2:<br>";
for ($i = 1; $i <= 10; $i += 2) {
    echo $i. "<br>";
}

echo "<br>Del 1 al 100 de 10 en 10:<br>";
for ($i = 1; $i <= 100; $i += 10) {
    echo $i. "<br>";
}

echo "<br>Del 10 al 1:<br>";
for ($i = 10; $i >= 1; $i--) {
    echo $i. "<br>";
}

echo "<br>Inicia en 1 y va duplicando el valor sin pasarse de 10000:<br>";
$i = 1;
while ($i <= 10000) {
    echo $i. "<br>";
    $i *= 2;
}

echo "<br>Empieza en 100 y va restando 1, después 2, después 3 y así siguiendo hasta volverse negativo:<br>";
$i = 100;
$j = 1;
while ($i >= 0) {
    echo $i. "<br>";
    $i -= $j;
    $j++;
}

?>
