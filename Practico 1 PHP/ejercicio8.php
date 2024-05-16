<?php
//Hacer un programa que reciba las losngitudes de los catetos de un triángulo y mediante pitagoras calule la hipotenusa
 
$catetoAd = $_GET['catetoAd'];
$catetoOp = $_GET['catetoOp'];

$hipotenusa = sqrt(pow($catetoAd, 2) + pow($catetoOp, 2));
//sqrt es para calcular la raiz cuadrada

echo "El cateto Adyacente es: $catetoAd .<br>";
echo "El cateto Opuesto es: $catetoOp. <br>";
echo "La hipotenusa del triángulo es: $hipotenusa";
?>