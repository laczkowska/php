<?php

include "8.1.php";
$index = 0;
$file = fopen("8.csv","r")or die("error");
while (!feof($file) ) {
    $tablica[] = fgetcsv($file);}
foreach ($tablica as $a){
    $car[$index] = new Car($a[0],$a[1],$a[2],$a[3],$a[4],$a[5],$a[6]);
    $index++;}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        *{
            box-sizing: border-box;
        }
        img{
            width : 300px;
            height: 200px;
        }
        .fotki{
            padding: 60px 30px;
            width : 15%;
            height: 275px;
            float: left;
        }
    </style>
    <meta charset="UTF-8">
    <title>samochody</title>
</head>
<body>
<?php
foreach ($car as $a){
    echo '<div class="fotki">';
    echo '<a href="8.3.php?id='. $a->getId().'"><img src="'. $a->getZdjecie() .'"><br>';
    echo '<p>'. $a->getMarka() ." ". $a->getModel().'</p></a>';
    echo '</div>';
}
fclose($file);
?>
</body>
</html>
