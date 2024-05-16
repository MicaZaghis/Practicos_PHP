<?php

function obtenerEdad(){
    $edad = 2024 - 1995;
    echo "Mi edad es: $edad";
}

obtenerEdad();

//-------------------------------
//parametros y argumentos 

function obtener_edad($anio, $anioActual = 2024){
    $edad = $anioActual - $anio;
    echo "Mi edad es: $edad";
}

obtener_edad(1995,2024);
obtener_edad(1998,2022);

//--------------------------------
//return
function otener_edad($anio, $anioActual = 2024){
    $edad = $anioActual - $anio;
    return $edad;
}

$edad = otener_edad(1995,2024);
echo "Mi edad es: $edad";
otener_edad(1996);

//----------------------------.
//declaraciones de tipo escalar
function saber_edad( int $anio, int $anioActual = 2024){
    $edad = $anioActual - $anio;
    return $edad;
}

$edad = saber_edad(2000,2024);
echo "Mi edad es: $edad";

//-----------------------------
//funciones anonimas

$mensaje = "La suma es: ";
$suma =function($numero1, $numero2) use ($mensaje){
    $resultado = $numero1 + $numero2; 
    return "$mensaje $resultado";
};

echo $suma (100,400);

?>