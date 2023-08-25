<?php

// subrotina declarada abaixo.
function exibeMensagem ($mensagem)
{
    echo $mensagem . PHP_EOL;
}

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

if (500 > $contasCorrentes ['090.456.988-87']['saldo']){
    exibeMensagem ("Você não pode sacar esse valor");
} else {
    $contasCorrentes ['090.456.988-87']['saldo'] -= 500;
}

foreach ($contasCorrentes as $cpf => $conta){
    exibeMensagem($cpf . " " . $conta['titular'] . ' ' . $conta['saldo']);
}