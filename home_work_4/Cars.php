<?php


class Cars extends Vehicle
{
    protected $type;
    protected $name;

    function __construct($max_speed, $type, $name)
    {
        parent::__construct($max_speed);
        $this->type = $type;
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
    public function getType()
    {
        return $this->type;
    }


}