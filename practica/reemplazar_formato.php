<?php
$RFC = "91 75 1A EC C7";
$buscar= " ";
$reemplazar= " : ";

$resultado = str_replace($buscar,$reemplazar,$RFC);
echo $resultado;

//str_replace en esta linea esta reemplazando los especios de $buscar por : 

$anio = "1995";
$mes = "01";
$dia = "04";

$formato = "%s-%s-%s";
echo sprintf($formato,$dia,$mes,$anio);

//agrega - en el medio de cada variable

?>