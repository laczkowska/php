<?php

function baza(){
    $dbuser = 's24545';
    $dbpass = 'Nat.Lacz';
    $db = new PDO("mysql:host=localhost;dbname=s24545", $dbuser,$dbpass) or die ("error");
    $question = "SELECT * FROM products";
    $query = $db->query($question);
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

