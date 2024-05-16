<?php
function esPrimo($numero) {
    // Comprueba si el número es menor que 2 (el primer número primo)
    if ($numero < 2) {
        return false;
    }

    // Comprueba si el número es divisible por cualquier número mayor que 1 y menor que la raíz cuadrada del número
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            return false;
        }
    }

    // Si llegamos aquí, significa que el número no tiene divisores aparte de 1 y sí mismo
    return true;
}

// Ejemplos de uso
echo esPrimo(2)? "true\n" : "false\n"; // Debería imprimir "true"
echo esPrimo(4)? "true\n" : "false\n"; // Debería imprimir "false"
echo esPrimo(29)? "true\n" : "false\n"; // Debería imprimir "true"
echo esPrimo(100)? "true\n" : "false\n"; // Debería imprimir "false"
?>
