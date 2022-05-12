<?php
require_once("pokemon.php");
class ice extends pokemon{
    public $weak = "fire", $res = "dragon";
    public $isConfused;
    public function attack($p2){
        $liczba = rand(0,9);
        if($liczba%2 == 0){
            $p2 -> isConfused=true;
        }if($p2 -> weak == "ice"){
            $p2 -> hpCurrent = $p2 -> hpCurrent-(10+10);
        } elseif($p2 -> res == "ice"){
            $p2 -> hpCurrent = $p2 -> hpCurrent-(10-5);
        } else{
            $p2 -> hpCurrent = $p2 -> hpCurrent-(10);
        }
    }
}