<?php

$altura = readline("Qual a sua altura ? ");
$peso = readline("Qual o seu peso ? ");
$calculoImc = round ($peso / $altura ** $altura);

if ($calculoImc <= 18){
    echo "Seu IMC é $calculoImc. Parabéns, você está no peso ideal !";
} else if ($calculoImc > 18 && $calculoImc <= 24) {
    echo "Seu IMC é $calculoImc. Parabéns, você está no peso ideal para a sua altura !";
} else {
    echo "Seu IMC é $calculoImc. Seu peso não é o ideal para a sua altura, cuidado !";
}
