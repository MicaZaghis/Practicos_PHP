<?php
class Persona {

   public $nombre;
   private $apellido;
   public $edad;
   private $telefono;
   static $idiomas; //variable de la clase

    //constructor al inicio
   public function __construct(
      string|int $nombre = "",
      string $apellido = "",
      int $edad = 0,
      string|int $telefono = ""
   ){
      $this -> nombre = $nombre;
      $this ->apellido = $apellido;
      $this ->edad = $edad;
      $this ->telefono = $telefono;
}

   function hablar($tema){
      echo "Soy", $this -> nombre, "y hablo sobre $tema";
   }


//this para obtener los datos y mostrar
   function ver(){

   }

   function cantar (){

   }
   
   //encapsulamiento
   private function temaExtenso($tema) {
      if ($tema == "Politica"){
         return "tema extenso";
      }

      else{
         return "tema no extenso";
      }
}

// get y set. Trabajan con atributos privados
//get : obtener
//set: agrega el dato
public function getTelefono() {
   return $this-> telefono;

}

public function setTelefono($telefono){
   $this ->telefono = $this -> validarTelefono($telefono);
}

protected function validarTelefono($telefono){
   if(preg_match("/^[0-9]{10}$/",$telefono)){
      //chequea que el numero de telefono sea correcto 
      //con numeros de 0 al 9 y que sean 10.
      return $telefono;
   }else{
      return "estructura incorrecta";
   }
}

//otra manera de usar get y set
public function __get($name){
   return $this -> $name;
}

public function __set($name, $value){
   return $this-> $name = $value;

}
//destructor al final
public function __destruct(){
   echo "Final de objeto";
}

}

?>