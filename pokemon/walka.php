<?php
class Walka
{
    protected $poke1, $poke2;
    function __construct($poke1, $poke2){
        $this -> poke1 = $poke1;
        $this -> poke2 = $poke2;}
    public function go(){
        while(true){
            if($this-> poke1->isCofused==false) {
                echo $this->poke1->getName() . " !!! BEATS !!! " . $this->poke2->getName() . "<br>";
                $this->poke1->attack($this->poke2);
                echo $this->poke2->getName() . " has now  " . $this->poke2->getHpCurrent() . "hp" . "<br><br>";
            } else{
                echo $this->poke1->getName()." CANT FIGHT IS CONFUSED<br>";
                $this->poke1->isCofused=false;
            }if($this->poke2->isCofused==false) {
                echo $this->poke2->getName() . " !!! BEATS !!! " . $this->poke1->getName() . "<br> ";
                $this->poke2->attack($this->poke1);
                echo $this->poke1->getName() . " has now " . $this->poke1->getHpCurrent() . "hp" . "<br><br>";
            } else{
                echo $this->poke2->getName()." CANT FIGHT - IS CONFUSED<br>";
                $this->poke2->isCofused=false;
            }if($this->poke1->getHpCurrent()<=0){
                echo $this->poke2->getName(). " WINS, GOOD JOB! HURRAY ";
                break;
            }if($this -> poke2 -> getHpCurrent() <= 0){
                echo $this -> poke1 -> getName(). " WINS, GOOD JOB! HURRAY ";
                break;
            }
        }
    }
}