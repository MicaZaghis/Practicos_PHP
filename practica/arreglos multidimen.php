<?php
//matriz
$animales = [
 /*0*/  "Felinos" => ["Puma","Jaguar","Leon"],
 /*1*/  "Aves" => ["Paloma","Pato","Tucan"],
 /*2*/  "Reptiles" => ["Serpiente","Cocodrilo","Tortuga"]

];

echo $animales["Aves"][1];
//muestra Pato

//recorrer matriz
$animales = [
    /*0*/  "Felinos" => ["Puma","Jaguar","Leon"],
    /*1*/  "Aves" => ["Paloma","Pato","Tucan"],
    /*2*/  "Reptiles" => ["Serpiente","Cocodrilo","Tortuga"]
   
];
//recorre el arreglo animales y los guarda en clasificacion 
//busca el animal y lo guarda en animal 
foreach ($animales as $clasificacion){
    foreach ($clasificacion as $animal){
        echo "Animal: $animal";
    }
}
?>