<?php
$bok = 10;
function m($bok){
    echo "<table>";
    for($i = 1; $i <= $bok; $i++){
        echo "<tr>";
        for($j = 1; $j <= $bok; $j++){
            echo "<td>".$i*$j."</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}
m($bok);