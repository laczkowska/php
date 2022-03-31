<?php

$a = 4;
$b = 3;
$c = 6;

if ($a == max($a, $b, $c)){
    if ( $a*$a == $b*$b + $c*$c){
        echo "spełnia";
    }
    else {
        echo " nie spełnia";
}
}

if ($b == max($a, $b, $c)){
    if ( $b*$b == $a*$a + $c*$c){
        echo "spełnia";
    }
    else {
        echo " nie spełnia";
}
}
if ($c == max($a, $b, $c)){
    if ( $c*$c == $b*$b + $a*$a){
        echo "spełnia";
    }
    else {
        echo " nie spełnia";
}
}
