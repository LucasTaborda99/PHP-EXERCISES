<?php

// Desenvolva um trecho de um algoritmo que consiga ordenar em ordem decrescente 4 números.

$n1 = 10;
$n2 = 20.55;
$n3 = 30.9;
$n4 = 200;
$maior = 0;
$segundoMaior = 0;
$terceiroMaior = 0;
$menor = 0;

if ($n1 > $n2 && $n1 > $n3 && $n1 > $n4) {
    $maior = $n1;
    if ($n2 > $n3 && $n2 > $n4) {
        $segundoMaior = $n2;
        if ($n3 > $n4) {
            $terceiroMaior = $n3;
            $menor = $n4;
        } else {
            $terceiroMaior = $n4;
            $menor = $n3;
        }
    }
    if ($n3 > $n2 && $n3 > $n4) {
        $segundoMaior = $n3;
        if ($n2 > $n4) {
            $terceiroMaior = $n2;
            $menor = $n4;
        } else {
            $terceiroMaior = $n4;
            $menor = $n2;
        }
    }
    if ($n4 > $n2 && $n4 > $n3) {
        $segundoMaior = $n4;
        if ($n2 > $n3) {
            $terceiroMaior = $n2;
            $menor = $n3;
        } else {
            $terceiroMaior = $n3;
            $menor = $n2;
        }
    }
} elseif ($n2 > $n1 && $n2 > $n3 && $n2 > $n4) {
    $maior = $n2;
    if ($n1 > $n3 && $n1 > $n4) {
        $segundoMaior = $n1;
        if ($n3 > $n4) {
            $terceiroMaior = $n3;
            $menor = $n4;
        } else {
            $terceiroMaior = $n4;
            $menor = $n3;
        }
    }
    if ($n3 > $n1 && $n3 > $n4) {
        $segundoMaior = $n3;
        if ($n1 > $n4) {
            $terceiroMaior = $n1;
            $menor = $n4;
        } else {
            $terceiroMaior = $n4;
            $menor = $n1;
        }
    }
    if ($n4 > $n1 && $n4 > $n3) {
        $segundoMaior = $n4;
        if ($n1 > $n3) {
            $terceiroMaior = $n1;
            $menor = $n3;
        } else {
            $terceiroMaior = $n3;
            $menor = $n1;
        }
    }
} elseif ($n3 > $n1 && $n3 > $n2 && $n3 > $n4) {
    $maior = $n3;
    if ($n4 > $n1 && $n4 > $n2) {
        $segundoMaior = $n4;
        if ($n1 > $n2) {
            $terceiroMaior = $n1;
            $menor = $n2;
        } else {
            $terceiroMaior = $n2;
            $menor = $n1;
        }
    }
    if ($n1 > $n2 && $n1 > $n4) {
        $segundoMaior = $n1;
        if ($n2 > $n4) {
            $terceiroMaior = $n2;
            $menor = $n4;
        } else {
            $terceiroMaior = $n4;
            $menor = $n2;
        }
    }
    if ($n2 > $n1 && $n2 > $n4) {
        $segundoMaior = $n2;
        if ($n1 > $n4) {
            $terceiroMaior = $n1;
            $menor = $n4;
        } else {
            $terceiroMaior = $n4;
            $menor = $n1;
        }
    }
} elseif ($n4 > $n1 && $n4 > $n2 && $n4 > $n3) {
    $maior = $n4;
    if ($n3 > $n1 && $n3 > $n2) {
        $segundoMaior = $n3;
        if ($n2 > $n1) {
            $terceiroMaior = $n2;
            $menor = $n1;
        } else {
            $terceiroMaior = $n1;
            $menor = $n2;
        }
    }
    if ($n1 > $n2 && $n1 > $n3) {
        $segundoMaior = $n1;
        if ($n2 > $n3) {
            $terceiroMaior = $n2;
            $menor = $n3;
        } else {
            $terceiroMaior = $n3;
            $menor = $n2;
        }
    }
    if ($n2 > $n1 && $n2 > $n3) {
        $segundoMaior = $n2;
        if ($n1 > $n3) {
            $terceiroMaior = $n1;
            $menor = $n3;
        } else {
            $terceiroMaior = $n3;
            $menor = $n1;
        }
    }
}

echo $maior . "\n" . $segundoMaior . "\n" . $terceiroMaior . "\n" . $menor;
