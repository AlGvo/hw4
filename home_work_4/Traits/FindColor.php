<?php

namespace home_work_4\Traits;


trait FindColor
{
    public function giveMyColor($color): string
    {
        return 'My color is '. $color. PHP_EOL;
    }
}