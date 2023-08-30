<?php

$array = [
    0 => 'um',
    1 => 'dois',
    2 => 'tres'
];

$contador = 0;
foreach ($array as $numeral => $nomeNumero){
    echo "$numeral em português é: $nomeNumero" . PHP_EOL;
    $contador ++;
}

echo "Total: " . count($array) . PHP_EOL;