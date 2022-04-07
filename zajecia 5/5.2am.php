<?php
if(isset($_GET['submit'])){
    $file = fopen("5.2b", 'a+')or die ("file not here");
    fwrite($file,$_GET['text']."\n");
    fclose($file);
}
?>

<!DOCTYPE html>
<html lang = "en">
<head>
</head>
<body>
<form action = "5.2am.php" method = "get">
    <label for = "text">text:</label><br>
    <textarea name = "text"></textarea> <br>
    <input type = "submit" name = "submit" value = "submit">
</form>
</body>
</html>