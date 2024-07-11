<?php
function areaQuadrado($base, $altura) {
    return $base * $altura;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $base = floatval($_POST['base']);
    $altura = floatval($_POST['altura']);

    $area = areaQuadrado($base, $altura);

    printf("A área do quadrado é %.3f", $area);
}
?>
