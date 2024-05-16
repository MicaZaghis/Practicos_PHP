<?php 

$saludo = "Hola";

echo "\"Micaela\" Zaghis"; //para usar comillas dentro del string 
echo 'I\'dont';

//Para escribir frases o texto se utiliza HEREDOC 
//Se pueden añadir variables, es decir va a mostrar el contenid
echo <<<Frase
$saludo 
Hola como estas? Soy Micela y estoy practicando PHP
Frase; 

//En NEWDOC  
//la variable no se reconoce
echo <<<'Frase'
$saludo 
Hola como estas? Soy Micela y estoy practicando PHP
Frase; 
//tambien se puede guardar en una variable
$Frase= <<<'Frase'
$saludo 
Hola como estas? Soy Micela y estoy practicando PHP
Frase; 

?>