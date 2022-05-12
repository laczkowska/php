<?php
require_once("pokemon.php");
class dragon extends pokemon{
    public $weak = "ice", $res = "dragon";
    public $isConfused;
    public function attack($p2){
        $liczba = rand(0,9);
        if($liczba%2 == 0){
            $p2 -> isConfused = true;
        }if($p2 -> weak == "dragon"){
            $p2 -> hpCurrent = $p2 -> hpCurrent-(10+10);
        } elseif($p2->res == "dragon"){
            $p2 -> hpCurrent = $p2 -> hpCurrent-(10-5);
        } else{
            $p2 -> hpCurrent = $p2 -> hpCurrent-(10);
        }
    }
}