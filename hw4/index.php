<?php

trait CanMove
{
    public function move()
    {
        echo 'Движение автомобиля';
    }
}

trait CanFly
{
    public function fly()
    {
        echo 'Полёт самолёта';
    }
}

class Car
{
    use CanMove;
}

class Aircraft
{
    use CanFly;
}

$car = new Car();
echo $car->move() . '<br \>';
$air = new Aircraft();
echo $air->fly() . '<br \>';