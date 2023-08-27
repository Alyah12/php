<?php

function sacar (array $conta, float $valorASacar)
{
    if ($valorASacar > $conta['saldo']){
        exibeMensagem ("Você não pode sacar esse valor");
    } else {
        $conta['saldo'] -= $valorASacar;
    }
    return $conta;
}

function exibeMensagem (string $mensagem): void
{
    echo $mensagem . PHP_EOL;
}

function depositar (array $conta, float $valorADepositar): array
{
    if ($valorADepositar > 0){
        $conta['saldo'] += $valorADepositar;
    } else {
        exibeMensagem("Valores de depositos precisam ser positivos");
    }
    return $conta;
}

function titularComLetrasMaiusculas (array &$conta){
   $conta['titular'] = mb_strtoupper($conta['titular']);
}

// Passagens por referência são perigosas, pois dão acesso total a uma função de modificar livremente um dado.