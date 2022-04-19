<?php

namespace home_work_4\Mechanisms;

use home_work_4\Traits\FindColor;



class Cars extends Vehicle
{
    use FindColor;
    protected $type;
    protected $name;
    protected static $country_of_sale;
    public $wheel;
    public $steering_wheel;





    function __construct($max_speed, Wheel $wheel, SteeringWheel $steering_wheel, $type, $name)
    {
        parent::__construct($max_speed);
        $this->type = $type;
        $this->name = $name;
        $this->wheel = $wheel;
        $this->steering_wheel = $steering_wheel;

    }


    public static function getCountryOfSale()
    {
        return self::$country_of_sale;
    }

    public static function setCountryOfSale($country_of_sale): void
    {
        self::$country_of_sale = $country_of_sale;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }



}