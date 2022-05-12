<?php
class Pokemon
{
    protected $name,$type,$hpMax,$hpCurrent;
    function __construct($name,$type,$hpMax){
        $this -> name = $name;
        $this -> type = $type;
        $this -> hpMax = $hpMax;
        $this -> hpCurrent = $hpMax;
    }public function getName(){
        return $this -> name;
    }public function getType(){
        return $this -> type;
    }public function getHpMax(){
        return $this -> hpMax;
    }public function getHpCurrent(){
        return $this -> hpCurrent;
    }
}