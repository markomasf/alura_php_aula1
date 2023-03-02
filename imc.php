<?php

$altura = 1.80;
$peso = 100;

$imc = $peso / ($altura * $altura);

if ($imc < 18.5){
    echo "Seu IMC é $imc, você está abaixo do peso!";
}elseif ($imc >= 18.5 && $imc <= 24.9){
    echo "Seu IMC é $imc, você está com o peso NORMAL!";
}elseif ($imc > 24.9 && $imc <= 29.9){
    echo "Seu IMC é $imc, você está com Pré-obesidade!";
}elseif ($imc > 29.9 && $imc <= 34.9){
    echo "Seu IMC é $imc, você está com Obesidade Grau 1";
}elseif ($imc > 34.9 && $imc <=39.9){
    echo "Seu IMC é $imc, você está com Obesidade Grau 2";
}elseif ( $imc > 40){
    echo "Seu IMC é $imc, você está com Obesidade Grau 3";
}