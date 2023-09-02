<?php

$notas = [
    'Ana' => 10,
    'João' => null,
    'Maria' => 9,
    'Miguel' => 7,
    'Samuel' => 6
];

ksort($notas);
var_dump($notas);

// Função de ordenação de Arrays
if (is_array($notas)) {
    echo 'Sim, é um array' .PHP_EOL;
}

// Checa se é de fato uma array

var_dump(
    array_is_list($notas)
);

// Checa se a array está em formato de lista.

echo 'Vinicius fez a prova ?' . PHP_EOL;
var_dump(isset($notas['Ana']));

// Verifica se a chave existe e não é nula.

echo 'Alguém tirou 10 ?' . PHP_EOL;
var_dump(in_array(10, $notas, true));

// Verifica se o valor existe

echo 'Quem tirou 10 ?' . PHP_EOL;
var_dump(array_search(6, $notas, true));