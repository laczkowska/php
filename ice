<?php
require_once("pokemon.php");
class ice extends Pokemon{
    public $weak="fire", $res="dragon";
    public $isCofused;

    public function attack($poke2){
        $liczba=rand(0,9);
        if($liczba%2==0){
            $poke2->isCofused=true;
        }


        if($poke2->weak=="ice"){
            $poke2->hpCurrent = $poke2->hpCurrent-(10+10);
        }
        elseif($poke2->res=="ice"){
            $poke2->hpCurrent = $poke2->hpCurrent-(10-5);
        }
        else{
            $poke2->hpCurrent = $poke2->hpCurrent-(10);
        }

    }
}
