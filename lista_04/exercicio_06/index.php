<?php

function areaRetangulo($base, $altura) {
    $area = $base * $altura;
    return $area;
}

$base = 6;
$altura = 2;

$area = areaRetangulo($base, $altura);

echo sprintf("A area do retangulo eh %.3f", $area);

?>
