<?php

$n = 16127;

function p($n){
    $a = 0;
    if ($n == 1 || $n == 0) {
        echo ("Liczba $n nie jest pierwsza, $a");
    } else {
        $pierwsza = True;
        for ($i = 2; $i < $n; $i++) {
            if ($pierwsza) {
                if ($n % $i == 0) {
                    $pierwsza = False;
                }
            }$a++;
        }

        if ($pierwsza) {
            echo ("Liczba $n jest pierwsza, $a");
        } else {
            echo ("Liczba $n nie jest pierwsza, $a");
        }
    }
}
echo p($n);
