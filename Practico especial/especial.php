<?php

require_once 'funciones.php';

$ar_letras = array();
for ($i = 0; $i < 100; $i++) {
    $ar_letras[] = letra_random();
}

$ar_letras_contador = [];
contar_letras($ar_letras_contador, $ar_letras);
porcentaje_de_letras($ar_letras_contador);

// Ejemplos de uso
echo "La letra 'A' existe en el arreglo: ". (letra_existe($ar_letras, 'A')? 'Sí' : 'No'). "<br>";
echo "La cantidad de letras 'A' en el arreglo es: ". contar_letra($ar_letras, 'A'). "<br>";

echo "<table border='1' cellpadding='5'>";
echo "<tr><th>Letra</th><th>Cantidad</th><th>Porcentaje</th></tr>";
foreach($ar_letras_contador as $letra => $datos) {
    echo "<tr><td>$letra</td><td> $datos[cantidad]</td><td> $datos[porcentaje]%</td></tr>";
}
echo "</table>";