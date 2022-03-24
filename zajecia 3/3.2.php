<?php

echo '<form action = "3.2.php" method = "POST">> 
    <label for="number">First number:</label><br>
    <input type="number" name="l1"> <br>
    
    <input type="submit" value="Submit"><br>
    </form> ';

$n = $_POST["l1"];

function p($n){
    $a = 0;
    if ($n <= 1) {
        echo ("Liczba $n nie jest pierwsza, $a");
    } else {
        $pierwsza = True;
        $ceil = ceil(sqrt($n));
        for ($i = 2; $i <= $ceil; $i++) {
            if ($pierwsza) {
                if ($ceil % $i == 0) {
                    $pierwsza = False;
                }
            }$a++;
        }

        if ($pierwsza) {
            echo ("Liczba $n jest pierwsza, $a");
        } else {
            echo ("Liczba $n nie jest pierwsza, $a");
        }
    }
}
echo p($n);