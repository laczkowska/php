<?php
function dodawanie($a, $b){
    $r = $a;
    for ($i = 1; $i <= $b; $i++)
    {
        $r++;
    }
    return $a. "+" .$b. "=" .$r;
}

function odejmowanie($a, $b){
    $r = $a - $b;
    return $a. "-" .$b. "=" .$r;
}

function mnozenie($a, $b){
    $r = $a * $b;
    return $a. "*" .$b. "=" .$r;
}

function dzielenie($a, $b){
    $r = $a / $b;
    return $a. "/" .$b. "=" .$r;
}