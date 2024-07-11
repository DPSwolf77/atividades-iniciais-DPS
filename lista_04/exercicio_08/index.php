<?php

function converteFahrenheitParaCelsius($fahrenheit) {
    $celsius = ($fahrenheit - 32) * 5 / 9;
    return $celsius;
}

$fahrenheit = 68;

$celsius = converteFahrenheitParaCelsius($fahrenheit);

echo sprintf("%dF eh equivalente a %dC", $fahrenheit, $celsius);

?>
