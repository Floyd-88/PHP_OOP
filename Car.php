<?php
class Car
{
    private $color;
    private $speed;
    private $tank;

    public function __construct($color, $speed) {
        $this->color = $color;
        $this->speed = $speed;
    }
    public function getColor() {
        return $this->color;
    }
    public function getSpeed() {
        return $this->speed;
    }
    public function getTank() {
        return $this->tank;
    }
    public function setTank($tank) {
        if($this->isCorrectTank($tank)){
            $this->tank = $tank;
        }
    }
    private function isCorrectTank($tank) {
        if($tank >=1 and $tank <=55) {
            return true;
        }
    }
}
?>