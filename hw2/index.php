<?php
 abstract class Shape{
     abstract public function draw();

}

class Point extends Shape {
     public $x;
     public $y;
     public function __construct($x, $y){
         $this->x = $x;
         $this->y = $y;
}
     public function draw(){
         echo "Рисуем точку с координатами (".$this->x.", ".$this->y.")";
     }
}
$point = new Point(2, 3);
 echo $point->draw();