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

$alunos2024 = $alunos2023 + $novosAlunos;

var_dump($alunos2024);