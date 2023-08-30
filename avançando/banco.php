<?php

// sub-rotina declarada abaixo.

require_once 'funcoes.php';

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Vinicius',
        'saldo' => '10000'
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

$contasCorrentes ['090.456.988-87'] = sacar($contasCorrentes ['090.456.988-87'], 500); // Conta da Claúdia
$contasCorrentes ['123.456.789-10'] = sacar($contasCorrentes ['123.456.789-10'], 500); // Conta do Vinicius

$contasCorrentes['123.456.789-10'] = depositar (
   $contasCorrentes['123.456.789-10'], 2000
);

if (500 > $contasCorrentes ['090.456.988-87']['saldo']) {
    exibeMensagem ("Você não pode sacar esse valor");
} else {
    $contasCorrentes ['090.456.988-87']['saldo'] -= 500;
}

unset($contasCorrentes['123.456.789-11']);

titularComLetrasMaiusculas ($contasCorrentes['123.456.789-10']);

echo "<ul>";

foreach ($contasCorrentes as $cpf => $conta)
{
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    exibeConta($conta);
}

echo "</ul>";

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Contas Correntes</h1>

    <dl>
        <?php foreach ($contasCorrentes as $cpf => $conta)  { ?>
        <dt>
            <h3><?= $conta['titular']; ?>  - <?= $cpf; ?> </h3>
        </dt>
            <dd>Saldo: <?= $conta['saldo']; ?></dd>
        <?php  } ?>
    </dl>
</body>
</html>
