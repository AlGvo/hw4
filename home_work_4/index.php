<?php

include 'Vehicle.php';
include 'Cars.php';
include 'Boat.php';


/*function carInfo(Vehicle $vehicle){
    echo $vehicle->up() . PHP_EOL;
}

$new_car = new Vehicle(100);


carInfo($new_car);*/


$vehicle = new Vehicle(100);
echo $vehicle->start();
echo $vehicle->up(10);
//echo $vehicle->up(10);
echo $vehicle->down(5);
echo $vehicle->down(10);
echo $vehicle->stop();


$car = new Cars(100, 'SUV', 'Toyota');
echo 'My Name is '. $car->getName().'. My type is '. $car->getType().PHP_EOL;


$boat = new Boat(100, 3, 'ПТН ПНХ');
echo 'I am a boat. My length is '. $boat->getBoatLength().'. My name is '. $boat->getName().PHP_EOL;
