<?php
while($row = $stmt -> fetch(PDO:FETCH_ASSOC)){
    echo "<div>";
    echo "<h2>".$row['name']."</h2>";

    echo "<h3>Cena netto: ".$row['net_price']."</h3>";
    $fileName="images/".$row['index'].".jpg";
    if(file_exists($fileName)){
        echo "<img src=$fileName>";}
    echo $row['description'];
    echo "</div>";
}



