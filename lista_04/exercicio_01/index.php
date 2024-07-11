<?php
function somaDoisValores($a, $b) {
    return $a + $b;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $a = intval($_POST['a']);
    $b = intval($_POST['b']);
    $soma = somaDoisValores($a, $b);
    echo "<p>A soma de $a e $b é $soma</p>";
}
?>

