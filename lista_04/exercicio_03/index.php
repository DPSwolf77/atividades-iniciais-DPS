<?php
function ehPar($numero) {
    return ($numero % 2 == 0) ? 1 : 0;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $numero = intval($_POST['numero']);
    
    $resultado = ehPar($numero);
    
    if ($resultado == 1) {
        echo "<p>O número $numero é par.</p>";
    } else {
        echo "<p>O número $numero é ímpar.</p>";
    }
}
?>
