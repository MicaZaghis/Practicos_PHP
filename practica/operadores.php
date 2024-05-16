<?php 
//operador igual ==

$raza = "Akita";
var_dump($raza == "Akita");
//devuelve un valor booleano 

//operador identico ===
$edad= "18";
var_dump($edad === 18);
//compara tambien tipo de datos

//operador diferente !=
$edad= 20;
var_dump($edad != 29);

//tambien hay operadores que comparan <>
//operador no identico !==

/* operador nave espacial <=>
0 ambos son iguales 
-1 el valor es menor 
1 el valor es mayor
*/
$edad = 6; 
var_dump($edad <=> 6); 

//operadores aritmeticos:
//operador indentidad + --> suma 
//operador de negacion -  --> resta
//operador multiplicacion *
//operador de division /
//operador modulo % 
//operador exponenciacion **
$numero = -10; 
echo +$numero; 

//----------
//operador de asignacion = 
//operador de asignacion por referencia & 
//operador de concatenar .=

$a = 10; 
$b = &$a; 
$a =20;
$a = 60;
//va cambiando el valor de a
echo $b; 

$saludo = "Hola";
$saludo .= "Micaela";

echo $saludo; 
//imprime Hola Micaela 
//----------------------------------
//operadores logicos: 
//operador and o &&
$esMayor = $edad >= 10; 
$edad = 15;

$regalo = "si";
$traeregalo = $regalo =="si";

var_dump($esMayor && $traeregalo);

//operador or o ||
$esMayor = $edad >= 10; 
$edad = 15;

$regalo = "No";
$traeregalo = $regalo =="Si";

var_dump($esMayor || $traeregalo);

//operador xor
$esMayor = $edad >= 10; 
$edad = 15;

$regalo = "No";
$traeregalo = $regalo =="Si";

var_dump($esMayor xor $traeregalo);

//operador !
$esMayor = $edad >= 10; 
$edad = 15;

$regalo = "No";
$traeregalo = $regalo =="Si";

var_dump(!$esMayor);

//operador pre-incremento 
$numero = 10; 
$numero += 1;

echo $numero; 
//pos incremento 
echo $numero ++; 

//pre-decremento -
//posdecremento --

//operador termnario (operando)?Operando:Operando 
$promedio = 5; 
$aprobo = ($promedio >= 7)?"Aprobaste":"Reprobaste";
echo $aprobo; 

//operador elvis ?:
$promedio = null; 
$aprobo = ($promedio)?:5;

echo $aprobo; 
//operador fusion null ??
$promedio = null; 
$aprobo = ($promedio)??5;

echo $aprobo; 



?>