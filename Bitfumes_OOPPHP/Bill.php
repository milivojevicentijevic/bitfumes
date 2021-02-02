<?php
class Bill 
{
    public $dinner = 20;
    public $dessert = 5;
    public $coldDrink = 3;
    public $bill;

    public function __construct() {
        echo "let s begin <br>";
    }
    public function dinner($person) {
        $this->bill += $this->dinner * $person;
        return $this;
    }
    public function dessert($person) {
        $this->bill += $this->dessert * $person;
        return $this;
    }
    public function coldDrink($person) {
        $this->bill += $this->coldDrink * $person;
        return $this;
    }
    public function __destruct() {
        echo "It s over! <br>";
    }
}