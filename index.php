<?php

include_once 'autoupload.php';

use home_work_4\Mechanisms\Vehicle;
use home_work_4\Mechanisms\Wheel;
use home_work_4\Mechanisms\SteeringWheel;
use home_work_4\Mechanisms\Cars;
use home_work_4\Mechanisms\Boat;
use home_work_4\Mechanisms\Driver;
use home_work_4\Animals\Dog;





//Home Work 4

$vehicle = new Vehicle(100);
echo $vehicle->start();
echo $vehicle->up(101);
//echo $vehicle->up(10);
echo $vehicle->down(5);
echo $vehicle->down(10);
echo $vehicle->stop();

$wheel = new Wheel();
$steering_wheel = new SteeringWheel();
$car = new Cars(100, $wheel, $steering_wheel, 'SUV', 'Toyota');
echo 'My Name is '. $car->getName().'. My type is '. $car->getType().PHP_EOL;


$boat = new Boat(100, 3, 'ПТН ПНХ');
echo 'I am a boat. My length is '. $boat->getBoatLength().'. My name is '. $boat->getName().PHP_EOL;


//Homework 5

Vehicle::setCreationCountry('Germany');
echo 'All Vehicles are created in '.Vehicle::getCreationCountry().PHP_EOL;
echo 'All Cars are created in '. Cars::getCreationCountry().PHP_EOL;

Vehicle::setCreationCountry('France');
echo 'All Boats are created in '. Boat::getCreationCountry().PHP_EOL;

Cars::setCountryOfSale('Ukraine');
echo 'Car was sold in '. Cars::getCountryOfSale().PHP_EOL;

Boat::setCountryFlag('Jamaica');
echo 'The boat sails under the '. Boat::getCountryFlag(). ' flag'.PHP_EOL;


$buy_car = new Cars(250, $wheel, $steering_wheel, 'SUV', 'Lexus');
echo $buy_car->checkExistngColor('yellow', 'car');


$car3 = new Cars(100, $wheel, $steering_wheel, 'SUV', 'BMW');
echo 'I am a car. '. $car3->giveMyColor('White');

$dog = new Dog();
echo 'I am a dog. '. $dog->giveMyColor('Black').PHP_EOL;


//Home Work 6

echo '-------- Home work 6 -------'.PHP_EOL;

//Композиция
$car4 = new Vehicle(150);
echo $car4->start();
echo $car4->up(10);

//Агрегация

$car5 = new Cars(150, $wheel, $steering_wheel, 'SUV', 'Toyota');
echo $car5->wheel->wheelsSpin();
echo $car5->steering_wheel->driveTheCar();


//Ассоциация
$car6 = new Cars(150, $wheel, $steering_wheel, 'SUV', 'Toyota');
$driver = new Driver();
echo $driver->drive($car6);
