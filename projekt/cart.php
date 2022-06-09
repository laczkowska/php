<?php

session_start();

function dodaj($tableIndex){
    $result = baza();

    if(empty($_SESSION['cart'])){

        $_SESSION['cart'] = $result;

        $i=0;
        foreach($_SESSION['cart'] as $a){
            $_SESSION['cart'][$i][1] = 0;
            $_SESSION['cart'][$i][2] = (int)$_SESSION['cart'][$i][2];
            $i++;
        }
    }
    $_SESSION['cart'][$tableIndex][1] += 1;
    $_SESSION['cart'][$tableIndex][2] = $table[$tableIndex][2] * $_SESSION['cart'][$tableIndex][1];
    totalPrice();
}
function usun($tableIndex){

        $table[] = $_SESSION['cart'];

    $_SESSION['cart'][$tableIndex][1] -= 1;
    $_SESSION['cart'][$tableIndex][2] = $table[$tableIndex][2] * $_SESSION['cart'][$tableIndex][1];
    totalPrice();
}
function wyczysc(){
    unset($_SESSION['cart']);
    unset($_SESSION['totalPrice']);
}
function totalPrice(){
    $_SESSION['totalPrice'] = 0;
    foreach($_SESSION['cart'] as $a){
        if($a[1]<>0){
            $_SESSION['totalPrice'] += $a[2];
        }
    }}