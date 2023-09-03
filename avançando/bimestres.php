<?php

$notasBimestre1 = [
    'Ana' => 10,
    'João' => 9,
    'Maria' => 9,
    'Miguel' => 7,
    'Samuel' => 6
];

$notasBimestre2 = [
    'Ana' => 10,
    'Maria' => 9,
    'Miguel' => 7,
    'Samuel' => 6
];

$alunosFaltantes = array_diff_key($notasBimestre1, $notasBimestre2);
var_dump(array_keys($alunosFaltantes));
var_dump(array_values($alunosFaltantes));

//var_dump(array_combine($notasBimestre1, $notasBimestre2));
var_dump(array_flip($alunosFaltantes));