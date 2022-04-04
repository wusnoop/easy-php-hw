<?php


/*set_include_path(get_include_path().PATH_SEPARATOR.'lib'.PATH_SEPARATOR);
spl_autoload_extensions('.php');
spl_autoload_register();*/

function my_autoloader($class) {

    include __DIR__."\\". $class . '.php';
}

spl_autoload_register('my_autoloader');

use lib\Car;
use lib\Aircraft;

$car = new Car();
echo $car->move();
$air = new Aircraft();
echo $air->fly()."<br \>";

