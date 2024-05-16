<?php
//Modificar el programa anterior para que recibiendo el número del mes retorne “1er trimestre”, 
//“2do trimestre”, “3er trimestre” o “4to trimestre” según corresponda

$mes = $_GET["mes"];

switch ($mes) {
    case 1:
    case 2:
    case 3:
        echo "1er trimestre";
        break;
    case 4:
    case 5:
    case 6:
        echo "2do trimestre";
        break;
    case 7:
    case 8:
    case 9:
        echo "3er trimestre";
        break;
    case 10:
    case 11:
    case 12:
        echo "4to trimestre";
        break;
    default:
        echo "Mes no válido";
        break;
}
?>