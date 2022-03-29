<?php
class Point {
    private $x;
    private $y;
    public static $counter;
    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
        self::$counter++;
    }
    public function setX($x){
        $this->x = $x;
    }
    public function getX(){
        return $this->x;
}
    public function setY($y){
        $this->y = $y;
    }
    public function getY(){
        return $this->y;
    }
    public function __destruct(){
        echo 'Delete this object'.'<br />';
    }
    public static function getCounter(){
        return self::$counter;
}
    public function __toString(){

        return  "Точка с координатами ($this->x, $this->y)".'<br />';
    }
    public function __get($name){
        if (isset($this->x[$name])) return $this->x[$name];
        return 'Класс Point работает только в двумерном пространстве';
    }
    public function __set($name, $value){
        $this->x[$name] = $value;
    }
    public function __call($method, $args){
        echo 'Класс Point работает только в двумерном пространстве';
    }
}

$point = new Point(3, 5);
$point2 = new Point(4, 12);
$point3 = new Point(1, 6);

echo $point->getX().'<br />';
echo $point->getY().'<br />';

$point->setX(15);
$point->setY(23);
echo $point->getX().'<br />';
echo $point->getY().'<br />';
echo $point2->getX().'<br />';
echo $point2->getY().'<br />';
echo $point3->getX().'<br />';
echo $point3->getY().'<br />';
echo "--------------------".'<br />';
echo Point::getCounter().'<br />';
echo $point.'<br />';
echo $point2.'<br />';
echo $point3.'<br />';
echo $point->z.'<br />';
echo $point->setZ().'<br />';