<?php

$array = [
     1 => 'a',
    '1' => 'b',
    1.5 => 'c',
    true => 'd'
];

foreach ($array as $item){
    echo $item . PHP_EOL;
}

// Os arrays do Php somente suportam strings e inteiros (integer), nunca um número decimal (float).

