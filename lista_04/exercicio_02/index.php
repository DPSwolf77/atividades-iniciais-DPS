<?php

function swap(&$a, &$b) {
    echo sprintf("Valores antes da troca: A = %d, B = %d\n", $a, $b);

    $temp = $a;
    $a = $b;
    $b = $temp;

    echo sprintf("Valores após a troca: A = %d, B = %d\n", $a, $b);
}

?>
