<?php

$x = 3;

function r($x){

    for ($i = 1; $i <= 100; $i++){
        $result[$i] = rand(1, 100);
    }
    var_dump($result);
    return $result [$x];
}
echo r($x);