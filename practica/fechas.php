<?php
$fecha_hoy = date("d-m-y");
echo "<center>";
echo $fecha_hoy;

//----------
echo "</center>";
$inicio = strtotime("1970-10-01 00:01");
echo $inicio; 
//-------------
echo "</center>";
$inicio = strtotime("1972-02-24");
$hoy = strtotime("2024-05-09");

echo "$inicio<br>";
echo "$hoy<br>";

$seg_tot = $hoy - $inicio; 
$min_tot = $seg_tot / 60;
echo "seg_tot <br>";
echo "min_tot <br>";

//para calcular distancias entre fechas en segundos 
//---------
echo "</center>";
$inicio = strtotime("1972-02-24");
$hoy = strtotime("2024-05-09");
echo "nac: $inicio<br>";
echo "hoy: $hoy<br>"; 


$seg_tot = $hoy - $inicio; 
$min_tot = $seg_tot / 60 / 60 / 24 /365;
echo "dif: $seg_tot <br>";
echo "Años: $min_tot <br>";
//----------------
//ejemplo de plazo fijo
echo "<center>";
$sxd= 24 * 60 * 60;
echo "sxd: $sxd<br>";

$inicioforma = "2024-05-09";
$incio = strtotime($inicioforma);
$plazo = 30;

$venc = $inicio + ($sxd * $plazo);
$vencforma = date("y-m-d", $venc);

echo "inicio: $incioforma<br>";
echo "plazo: $plazo<br>";
echo "vencforma: $vencforma<br>";
//-------------------
//cont dias de dif

echo "<center>";
$sxd = 24 * 60 * 60;
$fecha1 = "2024-01-01";
$fecha2 = "2024-05-09";

$f1 = strtotime($fecha1);
$f2 = strtotime($fecha2);

$dif = $f2 - $f1;
$difd = $dif / $sxd; 

echo "dif: $difd<br>";
?>