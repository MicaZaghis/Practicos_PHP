<?php

function imprimirDigitos($numero) {
    // Convierte el número a cadena para poder iterar sobre sus dígitos
    $numeroStr = strval($numero);
    
    // Itera sobre cada dígito del número
    for ($i = 0; $i < strlen($numeroStr); $i++) {
        // Imprime el dígito actual
        echo $numeroStr[$i]. "<br>";
    }
}

// Ejemplo de uso
imprimirDigitos(12345);
?>
