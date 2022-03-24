<?php

echo "Please choose the date, number of peaople traveling, and where you want to go :)";
echo "<br><br><br>";

echo '<form action = "3.3.php" method = "POST"> 

  <label for="datemin">Enter a date after 2022-24-03:</label>
  <input type="date" id="datemin" name="datemin" min="2022-03-24"><br><br>
  <label for="datemax">Enter a date before 2023-03-24:</label>
  <input type="date" id="datemax" name="datemax" max="2023-03-24"><br><br>
  
  <label for="number">Number of people:</label><br>
  <input type="number" name="l1"> <br><br>
  Choose country: <br>
  <input type="radio" id="Poland" name="operation" value="Poland">
  <label for="Poland"> Poland </label><br>
  <input type="radio" id="Italy" name="operation" value="Italy">
  <label for="Italy"> Italy </label><br>
  <input type="radio" id="United States of America" name="operation" value="United States of America">
  <label for="United States of America"> United States of America </label><br>
  <input type="radio" id="India" name="operation" value="India">
  <label for="India"> India </label><br><br>

  <input type="submit" name="submit"  value="Submit"><br>

  </form> ';

$price = array("Poland" => 10, "Italy" => 23, "United States of America" => 80, "India" => 60);
$datemin = $_POST["datemin"];
$datemax = $_POST["datemax"];
$passengers = $_POST["l1"];
$country = $_POST["operation"];
$cena = 0;

if($datemin >= $datemax || $passengers < 1){
    echo "Invalid date or number of passengers, please try again ";
} else{
    echo "We are calculating the price of your trip, it may take a few minutes :)";
}
echo "<br>";

$a = strtotime($datemax) - strtotime($datemin);
$a = $a / 86400;

$cena = $price[$country] * $a * $passengers;
echo "$cena";




