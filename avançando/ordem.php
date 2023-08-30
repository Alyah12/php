<?php

$notas = [
    [
    'aluno' => 'Heberth',
    'nota' => 10,
    ],
    [
    'aluno' => 'Rodrigo',
    'nota' => 7,
        ],
    [
    'aluno' => 'Leonardo',
     'nota' => 5,
        ],
];

function ordenaNotas(array $nota1, array $nota2): int
{
  return $nota2['nota'] <=> $nota1['nota'];
}

usort($notas,  'ordenaNotas');
var_dump($notas);

