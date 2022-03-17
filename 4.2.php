<?php

function d($dice){

    for ($i=0; $i<=6; $i++){
        $dice = rand(1, 6);

    }

    $


    switch ($dice) {
        case 1:
            return "*";

        case 2:
            return "* *";

        case 3:
            return "* * *";

        case 4:
            return "* * * *";

        case 5:
            return "* * * * *";

        case 6:
            return "* * * * * *";

    }
}
echo d($dice);