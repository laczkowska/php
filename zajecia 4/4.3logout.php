<?php

session_start();
unset($_SESSION['user']);
session_destroy();
header("Location: 4.3.php");