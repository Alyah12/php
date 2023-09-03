<?php

$alunos2023 = [
    0 => 'Heberth',
    1 => 'João',
    2 => 'Roberto',
    3 => 'Maria',
    ];

$novosAlunos = [
    5 => 'Nicole',
    6 => 'Thiago',
    7 => 'Vanessa',
    8 => 'Julia',
];

// Unpacking e Spread

$alunos2024 = [...$alunos2023,'Carlos Vinicius', ...$novosAlunos];
array_push($alunos2024, 'Aline', 'Samuel', 'Daniel');
$alunos2024[] = 'Lucas';

var_dump($alunos2024);