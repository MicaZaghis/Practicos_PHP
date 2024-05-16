<?php

function letra_random() {
    $letras = range('A', 'Z');
    return $letras[rand(0, count($letras) - 1)];
    //Usé una forma más concisa de generar una letra aleatoria usando range y rand.
}

function letra_existe($ar_letras, $letra) {
    return in_array($letra, $ar_letras);
    // in_array para comprobar si existe una letra en la matriz
}

function contar_letra(array $ar_letras, string $letra): int {
    return count(array_filter($ar_letras, function($l) use ($letra) {
        return $l === $letra;
    }));
}

function contar_letras(array &$ar_letras_contador, array $ar_letras): void {
    foreach ($ar_letras as $letra) {
        if (!isset($ar_letras_contador[$letra])) {
            $ar_letras_contador[$letra] = ['cantidad' => 0, 'porcentaje' => 0];
        }
        $ar_letras_contador[$letra]['cantidad']++;
    }
}

function porcentaje_de_letras(array &$ar_letras_contador): void {
    // Suma todas las cantidades de letras para obtener el total
    $total_letras = array_sum(array_column($ar_letras_contador, 'cantidad'));
    
    foreach ($ar_letras_contador as &$letra){
        // Calcula el porcentaje de cada letra basado en el total de todas las letras
        $letra['porcentaje'] = round(($letra['cantidad'] / $total_letras) * 100, 2);
    }
}

?>