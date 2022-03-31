<?php

$l1 = $_GET["l1"];
$l2 = $_GET["l2"];
$znak = $_GET["operation"];
$wynik = "";

switch($znak){
    case "dodawanie":
        $wynik = $l1 + $l2;
        break;

    case "odejmowanie":
        $wynik = $l1 - $l2;
        break;

    case "mnozenie":
        $wynik = $l1 * $l2;
        break;

    case "dzielenie":
        if($l2 == 0){
            echo "nie można dzielić przez 0";
        }
        else{
            $wynik = $l1 / $l2;
        }
        break;
}
echo $wynik;