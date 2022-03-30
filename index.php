<?php
class Point {
    public $x;
    public $y;
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
/*    public function __get($name){
        if (isset($this->x[$name])) return $this->x[$name];
        return 'Класс Point работает только в двумерном пространстве';
    }*/
    public function __set($name, $value){
        $this->x[$name] = $value;
    }
    public function __call($method, $args){
        echo 'Класс Point работает только в двумерном пространстве';
    }
}

$x = '';
$y = '';
$file = 'coord.txt';

    if(isset($_POST['save'])){
        $point = new Point($_POST['x'], $_POST['y']);
        file_put_contents($file, serialize($point));
    }

    if(isset($_POST['load'])){
        if(file_exists($file)){
            $point = unserialize(file_get_contents($file));
            $x = $point->x;
            $y= $point->y;
        }
    }
?>

<form name="form" method="post">
    <div>
        X:<input value="<?=$x?>" name="x" >
    </div>
    <div>
        Y:<input value="<?=$y?>" name="y">
    </div>
    <div>
        <input name="save" type="submit" value="Сохранить">
    </div>
    <div>
        <input name="load" type="submit" value="Загрузить">
    </div>
</form>
