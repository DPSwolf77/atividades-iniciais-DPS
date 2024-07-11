<?php
function buscaMaiorValor($valor1, $valor2, $valor3) {
    if ($valor1 > $valor2 && $valor1 > $valor3) {
        return $valor1;
    } elseif ($valor2 > $valor1 && $valor2 > $valor3) {
        return $valor2;
    } else {
        return $valor3;
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $valor1 = intval($_POST['valor1']);
    $valor2 = intval($_POST['valor2']);
    $valor3 = intval($_POST['valor3']);
    $maiorValor = buscaMaiorValor($valor1, $valor2, $valor3);
    echo "<p>O maior valor informado foi $maiorValor</p>";
}
?>
