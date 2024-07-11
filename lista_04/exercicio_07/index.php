<?php

function areaCirculo($raio) {
    $pi = 3.14159;
    $area = $pi * $raio * $raio;
    return $area;
}

$raio = 5;

$area = areaCirculo($raio);

echo sprintf("A area do circulo eh %.3f", $area);

?>
