<?php

$cookie_name = "vote";
$cookie_value = "done";
if(isset($_POST['submit'])){
    setcookie($cookie_name, $cookie_value, time() + 100, "/");
}?>

<?php
$cookie_name = "vote";
?>

<!DOCTYPE html>
<html lang = "en">
<head>
    <meta name = "viewport" content = "width=device-width, initial-scale=1.0"> <meta http-equiv = "X-UA-Compatible" content = "ie=edge">
    <title>login tutorial</title>
</head>
<body>

<?php
header("Refresh: 6, url = 4.4.php");
?>

<h2> tu for voting </h2>
<button onclick = "goBack()" > go back </button>
</body>
</html>
