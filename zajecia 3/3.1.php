<?php

echo '<form action = "3.1.php" method = "POST">
    <label for="number">First number:</label><br>
    <input type="number" name="l1"> <br>
    <label for="number">Second number:</label><br>
    <input type="number" name="l2">
    <br>
    <input type="radio" id="+" name="operation" value="+">
    <label for="+">+</label><br>

    <input type="radio" id="-" name="operation" value="-">
    <label for="-">-</label><br>

    <input type="radio" id="*" name="operation" value="*">
    <label for="*">*</label><br>

    <input type="radio" id="/" name="operation" value="/">
    <label for="/">/</label><br>

    <input type="submit" value="Submit"><br>

</form>';

$l1 = $_POST["l1"];
$l2 = $_POST["l2"];
$znak = $_POST["operation"];
$wynik = "";

switch($znak){
    case "+":
        $wynik = $l1 + $l2;
        break;

    case "-":
        $wynik = $l1 - $l2;
        break;

    case "*":
        $wynik = $l1 * $l2;
        break;

    case "/":
        $wynik = $l1 / $l2;
        break;
}
echo $wynik;


