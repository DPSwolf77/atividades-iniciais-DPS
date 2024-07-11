<?php

function ehBissexto($ano) {
    if (($ano % 4 == 0 && $ano % 100 != 0) || $ano % 400 == 0) {
        return 1;
    } else {
        return 0;
    }
}

$ano = 2024;

$resultado = ehBissexto($ano);

if ($resultado == 1) {
    echo sprintf("O ano %d eh bissexto", $ano);
} else {
    echo sprintf("O ano %d nao eh bissexto", $ano);
}

?>
