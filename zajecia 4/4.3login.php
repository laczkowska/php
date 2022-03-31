<?php

session_start();

$USERNAME="aaa";
$PASSWORD ="zzz";

if (isset($_POST['submit'])) {

    if ($_POST['login'] == $USERNAME) {

        if ($_POST['password'] == $PASSWORD) {

            $_SESSION['user'] = "cytrynek";
            echo "Zalogowano";

            header("Refresh: 6, url = 4.3.php");
        }
        else{
            echo "Ur password is incorect";
        }
    }
    else{
        echo "Ur login is incorrect";

    }
}
else{
    echo "E R R O R";

}
header("Refresh: 3, url = 4.3.php");
