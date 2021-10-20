<?php

// Desenvolva o trecho de um algoritmo que percorra todos os números múltiplos de 3 e 7, utilize algum laço de repetição.

$num = 0;

for ($num = 0; $num <= 1000; $num++) {
    if ($num % 3 == 0 && $num % 7 == 0) {
        echo "\n" . $num;
    }
}
