<?php
require_once("usuario.php");
$usuario = new Usuario(
    0,
    "Jose",
    "Lopez",
    "121334",
    "18"
);

$usuario -> insertar();

?>