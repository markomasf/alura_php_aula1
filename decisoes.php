<?php

$idade = 15;
$acomp = true;

echo "Você só pode entrar se tiver mais de 18 anos" . PHP_EOL;

if ($idade >= 18) {
    echo "Voce tem $idade anos." . PHP_EOL;
    echo "Pode entrar!";
}else if ($acomp = true && $idade < 18) {
    echo "Voce tem $idade anos, mas está acompanhado!" . PHP_EOL;
    echo "Pode entrar!";
}else {
    echo "Você tem $idade e não pode entrar!";
}