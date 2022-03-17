<?php

$pesel = "02301001234";

function pesel($pesel){
    $rok = substr($pesel, 0, 2);
    $miesiąc = substr($pesel, 2,2);
        $miesiąc = (int)$miesiąc-20;
    $dzień = substr($pesel, 4,2);

    echo "$dzień-$miesiąc-$rok";
}
pesel($pesel);
