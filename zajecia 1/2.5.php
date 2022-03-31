<?php

$figura = 1;
$a = 5;
$b = 6;
$h = 7;
echo "jaką figurę wybierasz?";

switch($figura){
    case 1:
        echo " trójkąt : ";
        function trójkąt($a, $h){
            $trójkąt = ($a*$h)/2;
            return $trójkąt;
        }
        echo trójkąt($a, $h); break;

    case 2:
        echo " prostokąt : ";
        function prostokąt($a, $b){
            $prostokąt = $a*$b;
            return $prostokąt;
        }
        echo prostokąt($a, $b); break;

    case 3:
        echo " trapez : ";
        function trapez($a, $b, $h){
            $trapez = (($a+$b)*$h)/2;
            return $trapez;
        }
        echo trapez($a, $b, $h); break;
}