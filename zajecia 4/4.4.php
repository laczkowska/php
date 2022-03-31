<?php

$cookie_name = "vote";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login tutorial</title>
</head>
<body>

<?php
if(!isset($_COOKIE[$cookie_name])) {

    echo '<h1> SONDA </h1>

        <form action="temp.php" method="post">
        
        <p> wybierz swój wiek: </p>
        <input type = "radio" id = "age1" name = "age" value = "30">
        <label for = "age1"> 0 - 30 </label><br>
        
        <input type = "radio" id = "age2" name = "age" value = "60">
        <label for = "age2" > 31 - 60 </label><br> 
         
        <input type = "radio" id = "age3" name = "age" value="100">
        <label for = "age3" > 61 - 100 </label><br><br>
        
        
        <p> lubisz rosol i pierogi? </p>
        <input type = "radio" id = "lubisz1" name = "lubisz" value = "1">
        <label for = "lubisz1" > tak, oba </label><br>
        
        <input type = "radio" id = "lubisz2" name = "lubisz" value = "1">
        <label for = "lubisz2" > tylko rosol </label><br>
        
        <input type = "radio" id = "lubisz3" name = "lubisz" value = "1">
        <label for = "lubisz3" > tylko pierogi </label><br>
        
        <input type = "radio" id = "lubisz4" name = "lubisz" value = "1">
        <label for = "lubisz4" > nic nie lubie </label><br>
        
        
        <p> masz zwierzaczka? </p>
        <input type = "radio" id = "zwierzatko1" name = "zwierzatko" value= "1">
        <label for = "zwierzatko1" > tak </label><br>
        
        <input type = "radio" id = "zwierzatko2" name = "zwierzatko" value="2">
        <label for = "zwierzatko2"> nie </label><br>


        <input type="submit" name="submit" value="Submit">
    </form>';

} else {
    echo "cookie '" . $cookie_name . "' is set!<br>";
    echo "Już głosowałeś :(";
}
?>

</body>
</html>