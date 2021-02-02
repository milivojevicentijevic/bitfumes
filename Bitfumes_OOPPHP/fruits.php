<?php
class Fruits 
{
    protected $name;   // if this was private it wouldn't work

    public function setName($name) {
        $this->name = $name;
    }
}
class Apple extends Fruits 
{
    public function juice() {
        return "Juice!<br>";
    }
}
class Mango extends Fruits 
{
    public function pick() {
        return "Pick $this->name <br>";
    }
}