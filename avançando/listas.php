<?php
//$idadeList = [21,23,22,19,30,26];

//$idadeList[] = 20;

//foreach ($idadeList as $idade){
//   echo $idade . PHP_EOL;
//}

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