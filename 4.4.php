<?php
$n = 5;
if ($n < 1) {
    print ("To pojęcie nie ma zastosowania dla $n.");
} elseif ($n == 1) {
    print ('Liczba 1 nie jest pierwsza');
} else {
    $pierwsza = True;
    for ($i = 2; $i < $n; $i++) {
        if ($pierwsza) {
            if ($n % $i == 0) {
                $pierwsza = False;
            }
        }
    }
}
if ($pierwsza) {
    print ("Liczba $n jest pierwsza.");
} else {
    print ("Liczba $n nie jest pierwsza.");
}
?>