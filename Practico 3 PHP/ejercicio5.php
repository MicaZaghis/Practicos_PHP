<?php
function invertirCifras($numero) {
    $resultado = 0;
    $factor = 1;
    
    // Calcula la cantidad de cifras en el número
    while ($numero!= 0) {
        $numero /= 10;
        $factor *= 10;
    }
    
    // Restaura el número original para el cálculo
    $numero *= 10;
    
    // Aplica la técnica de división sucesiva para obtener las cifras en orden inverso
    while ($numero > 0) {
        $digito = $numero % 10;
        $resultado += $digito * $factor;
        $numero /= 10;
        $factor /= 10;
    }
    
    return $resultado;
}

// Ejemplo de uso
echo invertirCifras(3729); // Debería imprimir 9273
?>
