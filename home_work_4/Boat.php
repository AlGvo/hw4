<?php

class Boat extends Vehicle
{
    protected $boat_length;
    protected $name;

    function __construct($max_speed, $boat_length, $name)
    {
        parent::__construct($max_speed);
        $this->boat_length = $boat_length;
        $this->name = $name;
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
    /**
     * @return mixed
     */
    public function getBoatLength()
    {
        return $this->boat_length;
    }


}