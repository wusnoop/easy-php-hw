<?php
require_once 'car.php'; //class
require_once 'aircraft.php'; // class



$car = new \carname\Car();
echo $car->move();
$air = new \Aircraftname\Aircraft();
echo $air->fly();