<?php

$array = array( 6, 9, 420, 21 ,37);

function maxfor($array){
    $max = $array[0];
    for($i = 0; $i < count($array); $i++){
        if ($max < $array [$i]){
            $max = $array [$i];
        }
    }
    return $max;
}

function maxwhile($array){
    $max = $array[0];
    $i = 0;
    while($i < count($array)){
        if ($max < $array [$i]){
            $max = $array [$i];
        } $i++;
    }
    return $max;

}

function maxdo($array){
    $max = $array[0];
    $i = 0;
    do{
        if ($max < $array [$i]){
            $max = $array [$i];
        }
        $i++;
    }
    while($i < count($array));
    return $max;
}

function maxforeach($array){
    $max = $array[0];
    foreach ($array as $i){
        if ($max < $i){
            $max = $i;
        }
    }
    return $max;
}
echo maxfor($array) ." for <br/>";
echo maxwhile($array) ." while <br/>";
echo maxdo($array) ." do_while <br/>";
echo maxforeach($array) ." for_each <br/>";



