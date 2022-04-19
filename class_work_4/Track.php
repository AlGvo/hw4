<?php

class Track extends Car
{
    public $weight;

    public function sayWeight(){
        echo 'Car weight is ' . $this->weight . PHP_EOL;
    }

    public function sayHellow(){
       // echo 'I am a car ' .$this->brand . ' ' .$this->model . ' ' .$this->year . 'with weight ' .  $this->weight . PHP_EOL;
        parent::sayHellow();
        echo 'with weight ' .  $this->weight . PHP_EOL;
    }
}