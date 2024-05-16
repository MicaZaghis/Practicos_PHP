<?php

$radio = $_GET['radio'];

$diametro = 2 * $radio;
$circunsferencia = M_PI * $diametro;
$superficie = M_PI * pow($radio, 2);

echo "Radio: $radio<br>";
echo "Diámetro: $diametro<br>";
echo "Circunsferencia: $circunsferencia<br>";
echo "Superficie: $superficie<br>";

?>