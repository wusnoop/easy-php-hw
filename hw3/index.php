<?php
interface CanMove{
    public function move();
}
interface CanFly{
    public function fly();
}
class Car implements CanMove{
    public function move(){
        echo 'Движение автомобиля';
    }
}
class Aircraft implements CanFly{
    public function fly(){
        echo 'Полёт самолёта';
    }
}
$car = new Car();
echo $car->move().'<br \>';
$air = new Aircraft();
echo $air->fly().'<br \>';