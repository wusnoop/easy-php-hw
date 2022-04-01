<?php


set_include_path(get_include_path().PATH_SEPARATOR.'lib');
spl_autoload_extensions('.php');
spl_autoload_register();

$car = new Car();
echo $car->move();
$air = new Aircraft();
echo $air->fly();