<?php
//if - else - else if
$promedio = 10; 
$tieneFaltas = "No";

if($promedio >= 7 && $tieneFaltas == "No"){
    echo "Aprobaste";

}else if($tieneFaltas == "Si"){
    echo "Reprobaste por faltas";

}else{
    echo "Reprobaster";
}

//switch 
$camisa = "verde";
switch($camisa){
    case "Gris":
        echo "Camisa gris";
        break;
    case "rojo":
        echo "Camisa rojo";
        break;
    case "verde":
        echo "Camisa verde";
        break; 
}

//match v8
$camisa = "verde";
echo match($camisa){
    "Gris"=> "camisa gris",
    "rojo"=> "camisa rojo",
    "verde"=> "camisa verde"
};

//while
$zapato = 0;
while($zapato<=100){
    echo "zapato numero: ",$zapato;
    ++$zapato;

}

//do while
$zapato = 0;
do{
    echo "zapato numero: ",$zapato;
    ++$zapato;

}while($zapat0 <= 100);

//for 
$zapato = 0;
for($zapato =0; $zapato<10; $zapato++){
    echo "zapato numero: ",$zapato;

}

//foreach
//trabaja con arreglos 
$array= ["Mica", "Pia", "Mojito"];
$nombre = "Mica";

foreach($array as $nombre){
    echo "Mi nombre es: ",$nombre;
}
?>