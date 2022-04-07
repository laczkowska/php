<?php
$file = fopen("5.3d","r")or die("lol");
while (!feof($file) ) {
    $tablica[] = fgetcsv($file);
}
fclose($file);
?>
<!DOCTYPE html>
<html lang = "pl">
<head>
</head>
<body>
<h2>Menu:</h2>
<?php
echo '<ul>';
echo "<li> <a href = '5.3a.php'>Edytuj plik</a></li>";
foreach($tablica as $a)
{
    echo "<li> <a href='5.3c.php?1=".$a["1"]."'>".$a["0"]."</a></li>";
}
echo '</ul>';?>

<h2>Zawartość pliku:</h2>
<?php
$i = 1;
$file = fopen("5.3d","r")or die("lol");
while (!feof($file) ) {
    echo "Linia numer: " . $i . " \"" . fgets($file) . "\"<br><br> ";
    $i++;
}
fclose($file);
?>

<h3>Edytuj linie</h3>
<form action = "5.3b.php" method = "post">
    <label for = "lineToEdi">Linia do edycji</label><br>
    <input type = "number" id = "lineEdit" name="lineToEdit" min = "1" max = "<?php echo count($tablica);?>" required><br><br><br>
    <label for = "namEdit">Edycja nazwy</label><br>
    <input type = "text" id = "namEdit" name = "namEdit"><br><br><br>
    <label  = "insidesEdit">Linia do edycji</label><br>
    <input type = "text" id = "insidesEdit" name = "insidesEdit"><br><br><br>
    <input type = "submit" name = "edit">
</form>
</body>
</html>
