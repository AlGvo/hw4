<?php

include 'MavableInterface.php';

class Vehicle implements MovableInterface
{
    protected $max_speed;
    private $current_speed;

    public function __construct($max_speed)
    {
        $this->max_speed = $max_speed;

 //       echo "I am construct and my speed is ".$max_speed.PHP_EOL;
    }

    public function getMaxSpeed()
    {
        return $this->max_speed;
    }



    public function start()
    {
        $this->current_speed = 0;
        return 'I am starting and my speed is '. $this->current_speed . PHP_EOL;
    }




    public function up(int $unit)
    {
        if($this->current_speed !== null){
            $this->current_speed += $unit;
        } else {
            return 'Engine not running';
        }

        if($this->current_speed > $this->max_speed){
            return 'This speed is more then maximum';
        }

        return 'I am moving and my speed is '.$this->current_speed. PHP_EOL;
    }



    public function down(int $unit)
    {

        if($this->current_speed !== null){
            $this->current_speed -= $unit;
        } else {
            return 'Engine not running';
        }

        if ($this->current_speed < 0) {
            $this->current_speed = 0;
        }


        return 'I am slowing down. My current speed is '.$this->current_speed . PHP_EOL;
    }

    public function stop()
    {
        $this->current_speed = null;
        return ' I stop'. PHP_EOL;
    }





}
