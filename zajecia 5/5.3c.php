<?php
$file = fopen("5.3d","r")or die("lol");
while (!feof($file) ) {
    $tablica[] = fgetcsv($file);
}

$valid="0";
if(isset($_GET['1'])){
    $as=$_GET['1'];
    foreach ($tablica as $x){
        if($x["1"]==$as){
            $valid=$x["1"];
        }
    }
    $as=$valid;
}
else{
    $as="0";
}

echo '<!DOCTYPE html>
<html lang = "pl">
<head>
</head>
<body>';
echo "<h1>".$tablica[$as]["2"]."</h1>";
echo '<ul>';

echo "<li> <a href = '5.3a.php'>Edytuj plik</a></li>";
foreach($tablica as $a)
{
    echo "<li> <a href = '5.3c.php?1=".$a["1"]."'>".$a["0"]."</a></li>";
}
echo '</ul>
</body>
</html>';

fclose($file);
?>
