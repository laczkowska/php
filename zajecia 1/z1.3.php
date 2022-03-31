<?php

$month = 2;
$year = 2000;

if ($month==1 || $month==3 || $month==5 || $month==7 || $month==8 || $month==10 || $month==12){
    echo "31 dni";}
    elseif ($month == 2){
        if ($year%4 == 0){
            if ($year%100 == 0){
                if ($year%400 == 0){
                    echo "29 dni";
                }
             } else {
                echo "28 dni";
                }
            }

        } else{
            echo "28 dni";
        }
    }
    else{
        echo "30 dni";
        }



