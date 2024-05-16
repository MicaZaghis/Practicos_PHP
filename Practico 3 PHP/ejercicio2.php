<?php
/*Hacer una función que reciba tres parámetros. 
El primero será un carácter del conjunto {‘+’,’-‘,’*’,’/’} Los otros dos serán números. 
La función devolverá el resultado de la operación correspondiente. 
La función deberá contemplar el caso que el dividendo sea 0 y mostrar un mensaje.
*/

function operacion($operador, $num1, $num2) {
    switch ($operador) {
      case '+':
        return $num1 + $num2;
      case '-':
        return $num1 - $num2;
      case '*':
        return $num1 * $num2;
      case '/':
        if ($num2 == 0) {
          return "Error: no se puede dividir entre cero";
        } else {
          return $num1 / $num2;
        }
      default:
        return "Error: operador no válido";
    }
  }

echo operacion('+', 2, 3); // devuelve 5
echo operacion('-', 5, 2); // devuelve 3
echo operacion('*', 4, 5); // devuelve 20
echo operacion('/', 10, 2); // devuelve 5
echo operacion('/', 10, 0); // devuelve "Error: no se puede dividir entre cero"
echo operacion('^', 2, 3); // devuelve "Error: operador no válido"

?>