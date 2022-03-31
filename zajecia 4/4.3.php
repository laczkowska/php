<?php

session_start();
?>
<!DOCTYPE html>
<html lang = "en">
<head>
    <meta name = "viewport" content = "width=device-width, initial-scale = 1.0"> <meta http-equiv = "X-UA-Compatible" content = "ie=edge">
    <title>login tutorial</title>
</head>
<body>
<?php if(empty($_SESSION['user'])) {
    echo '<form action = "4.3login.php" method = "post">
        <input type = "text" name = "login" required>
        <br>
        <br>
        <input type = "password" name = "password" required>
        <br>
        <br>
        <input type = "submit" name = "submit" value = "Submit">
    </form>';}
else{
    echo '<p> Czesc ';
    echo $_SESSION['user'];
    echo '</p>';
    echo '<a href = "4.3logout.php">logout</a>';
}?>
</body>
</html>
