<?php

namespace home_work_4\Mechanisms;

class Driver
{

    public function drive(Cars $cars)
    {

        return 'I am a driver. '. $cars->start();
    }
}