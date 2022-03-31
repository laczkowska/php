<?php

$array["onas"] = ["nazwa" => "O nas", "link" => "onas", "tresc" => "tu możesz poczytać o nas"];
$array["kontakt"] = ["nazwa" => "Kontakt", "link" => "kontakt", "tresc" => "mail: aaa@zzz.ccc, telefon: +00 777 666 111"];


$valid="onas";
if(isset($_GET['link'])){
    $a = $_GET['link'];
    foreach ($array as $n){
        if($n["link"] == $a){
            $valid = $n["link"];
        }
    }
    $a=$valid;
}
else{
    $a = "onas";
}
$a = $_GET['link'];
echo'<!DOCTYPE html>

<html lang = "pl">
<head>
    <meta charset = "UTF-8">
    <title>'.$array[$a]["nazwa"];
    echo '</title>
</head>
<body>';

echo "SIEEEEMA";
echo '<ul>';
    foreach($array as $x){
        echo "<li> <a href = '4.2.php?link=".$x["link"]."'>".$x["nazwa"]."</a></li>";
    }
    echo'</ul>';
        echo $array[$a]["nazwa"];
        echo "<br>";
        echo $array[$a]["tresc"];
    echo '</body>
    </head>';