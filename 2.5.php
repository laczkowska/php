<?php

$figura = 1;
$a = 5;
$b = 6;
$h = 7;
echo "jaką figurę wybierasz?";

switch($figura){
    case 1:
        echo " trójkąt";
        function trójkąt($a, $h){
            $trójkąt = $a*$h;
            echo $trójkąt;
        }
        trójkąt($a, $h); break;

    case 2:
        echo " prostokąt";
        function prostokąt($a, $b){
            $prostokąt = $a*$b;
            echo $prostokąt;
        }
        prostokąt($a, $b); break;

    case 3:
        echo " trapez";
        function trapez($a, $b, $h){
            $trapez = ($a+$b)*$h;
            echo $trapez;
        }
        trapez($a, $b, $h); break;
}