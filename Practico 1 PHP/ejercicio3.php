<?php
/*
$var1 = 5 + “10”;
echo $var 1;
$var2 = 5  + “10 veces”,
echo $var2;
$var3 = 5 + “veces”;
echo $var3;
$var 4 = “tengo ” + 4 + “autos;
echo $var 4;  
*/

//codigo corregido 

$var1 = 5 + 10;
echo $var1 . "<br>";

$var2 = 5 + 10 . " veces";
echo $var2 . "<br>";

$var3 = 5 . " veces"; // No se puede convertir "veces" a número, así que $var3 será 5
echo $var3 . "<br>";

$var4 = "tengo " . 4 . " autos";
echo $var4;
?>

