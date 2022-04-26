<?php

include __DIR__. '/vendor/autoload.php';
use \Mathematics\Mathematics;


$math = new Mathematics();
echo $math->sum(2,3). PHP_EOL;

echo $math->difference(5,3). PHP_EOL;

echo $math->exponentiation(3,3).PHP_EOL;