<?php


namespace home_work_4\Mechanisms;

class Vehicle implements MovableInterface
{
    protected $max_speed;
    private $current_speed;
    protected static $creation_country;
    public const COLOR_YELLOW = 'yellow';
    public const COLOR_GREEN = 'green';
    public const COLOR_RED = 'red';

    //for home work 6 - сomposition, aggregation, association
    //Composition
    protected $go_ahead;
    protected $turn_right;
    protected $turn_left;


    public function __construct($max_speed)
    {
        $this->max_speed = $max_speed;
        //Composition
        $this->go_ahead = new GoAhead();
        $this->turn_left = new TurnLeft();
        $this->turn_right = new TurnRight();


    }

    public static function getCreationCountry()
    {
        return self::$creation_country;
    }

    /**
     * @param mixed $creation_country
     */
    public static function setCreationCountry($creation_country): void
    {
        self::$creation_country = $creation_country;
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
            return 'Engine is not running';
        }

        if($this->current_speed > $this->max_speed){
            return 'This speed is more then maximum';
        }
            $go = $this->go_ahead->moving();
            $left = $this->turn_left->turningLeft();
            $right = $this->turn_right->turningRight();
            return 'I am moving and my speed is '.$this->current_speed. PHP_EOL. $go . $left. $right .  PHP_EOL;
            //return 'I am moving and my speed is '.$this->current_speed. PHP_EOL;
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

    public function checkExistngColor($color, $vehicle_name) {
        if (in_array($color, [
            self::COLOR_GREEN,
            self::COLOR_RED,
            self::COLOR_YELLOW
        ])) {
            return 'You can buy the '. $vehicle_name . ' with color '. $color. PHP_EOL;
        }

        return 'There is no '. $vehicle_name . ' with color '. $color. PHP_EOL;
    }




}
