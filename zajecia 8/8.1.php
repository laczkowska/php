<?php

class car{
    private $id, $make, $carmodel, $year, $price, $capacity, $photo;

    function __construct($id, $make, $carmodel, $year, $price, $capacity, $photo){
        $this->id = $id;
        $this->make = $make;
        $this->carmodel = $carmodel;
        $this->year = $year;
        $this->price = $price;
        $this->capacity = $capacity;
        $this->photo = $photo;
    }


    public function setId($wartosc){
        $this->id = $wartosc;
    }
    public function getId(){
        return $this->id;
    }

    public function setModel($wartosc){
        $this->make = $wartosc;
    }
    public function getModel(){
        return $this->make;
    }

    public function setMarka($wartosc){
        $this->carmodel = $wartosc;
    }
    public function getMarka(){
        return $this->carmodel;
    }

    public function setRok($wartosc){
        $this->year = $wartosc;
    }
    public function getRok(){
        return $this->year;
    }

    public function setCena($wartosc){
        $this->price = $wartosc;
    }
    public function getCena(){
        return $this->price;
    }

    public function setPojemnosc($wartosc){
        $this->capcity = $wartosc;
    }
    public function getPojemnosc(){
        return $this->capacity;
    }

    public function setZdjecie($wartosc){
        $this->photo = $wartosc;
    }
    public function getZdjecie(){
        return $this->photo;
    }
}