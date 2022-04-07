<?php
include "5.1a.php";
$a = $_GET["a"];
$b = $_GET["b"];
$operation = $_GET["operation"];

switch($operation){
    case "+":
        echo dodawanie($a, $b);
        break;

    case "-":
        echo odejmowanie($a, $b);
        break;

    case "*":
        echo mnozenie($a, $b);
        break;

    case "/":
        if($b == 0){
            echo "nie można dzielić przez 0";
        }
        else{
            echo dzielenie($a, $b);
        }
        break;
}
?>
<!DOCTYPE html>
<html lang = "en">
<head>
</head>
<body>
<form action = "5.1bm.php" method = "get">
    <label for = "a">input first number:</label><br>
    <input type = "number" name = "a" step = "any" required><br>

    <label for = "b">input second number:</label><br>
    <input type = "number" name = "b" step = "any" required><br>

    <label for = "operation"> choose operation: </label><br>
    <select name = "operation">
        <option value = "+">+</option>
        <option value = "-">-</option>
        <option value = "*">*</option>
        <option value = "/">/</option>
    </select><br><br>

    <input type = "submit" name = "submit" value = "Submit">

</form>
</body>
</html>