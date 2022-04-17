<?php
namespace home_work_4\Mechanisms;

class Boat extends Vehicle
{
    protected $boat_length;
    protected $name;
    protected static $country_flag;

    function __construct($max_speed, $boat_length, $name)
    {
        parent::__construct($max_speed);
        $this->boat_length = $boat_length;
        $this->name = $name;
    }

    public static function getCountryFlag()
    {
        return self::$country_flag;
    }

    public static function setCountryFlag($country_flag): void
    {
        self::$country_flag = $country_flag;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getBoatLength()
    {
        return $this->boat_length;
    }


}