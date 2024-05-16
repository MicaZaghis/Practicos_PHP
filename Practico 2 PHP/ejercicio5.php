<?php

$mes = $_GET["mes"];
$dia = $_GET["dia"];

switch ($mes) {
    case 1:
        if ($dia >= 1 && $dia <= 20) {
            echo "Verano";
        } else {
            echo "Primavera";
        }
        break;
    case 2:
        echo "Verano";
        break;
    case 3:
        if ($dia <= 20) {
            echo "Verano";
        } else {
            echo "Otoño";
        }
        break;
    case 4:
    case 5:
    case 6:
        if ($dia <= 20) {
            echo "Otoño";
        } else {
            echo "Invierno";
        }
        break;
    case 7:
    case 8:
    case 9:
        echo "Invierno";
        break;
    case 10:
        if ($dia <= 20) {
            echo "Invierno";
        } else {
            echo "Primavera";
        }
        break;
    case 11:
    case 12:
        echo "Primavera";
        break;
    default:
        echo "Mes no válido";
        break;
}

?>