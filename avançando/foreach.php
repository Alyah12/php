<?php

$contasCorrentes = [
   '123.456.789-10' => [
       'titular' => 'Vinicius',
       'saldo' => '1000'
   ],
   '123.456.789-11' =>  [
    'titular' => 'Maria',
    'saldo' => '10000'
    ],
   '123.456.789-12' => [
    'titular' => 'João',
    'saldo' => '100000'
    ]
];

$contasCorrentes ['090.456.988-87'] = [
    'titular' => 'Claudia',
    'saldo' => '20000'
];


foreach ($contasCorrentes as $cpf => $conta){
        echo $cpf . "" . $conta['titular'] . PHP_EOL;
}
