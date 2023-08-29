<?php

$carros = [
    'LMT-D4GF' => [
        'modelo' => 'Civic',
        'marca' => 'Honda'
    ],
    'HDR-6567' => [
        'modelo' => 'Uno',
        'marca' => 'Fiat'
    ],
    'VDF-HJDF' => [
        'modelo' => 'Classic',
        'marca' => 'Volksvagen'
    ],
];

foreach ($carros as $placa => $carro){
    echo "$placa: {$carro['marca']}" . PHP_EOL;
};

// modelo de array comparativo.
