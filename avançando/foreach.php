<?php

$contasCorrentes = [
   12345678910 => [
       'titular' => 'Vinicius',
       'saldo' => '1000'
   ],
   12345678911 =>  [
    'titular' => 'Maria',
    'saldo' => '10000'
    ],
   12345678912 => [
    'titular' => 'João',
    'saldo' => '100000'
    ]
];

$contasCorrentes [] = [
    'titular' => 'Claudia',
    'saldo' => '20000'
];


foreach ($contasCorrentes as $cpf => $conta){
        echo $cpf . "" . $conta['titular'] . PHP_EOL;
}
