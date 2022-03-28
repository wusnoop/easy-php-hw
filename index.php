<?php

/*$arr = [50.25, 20.38, 50.78, 75.75, 50];
$arr2 = [];
foreach ($arr as $v) {
    $arr2[] = $v * 0.77;

   }
foreach ($arr2 as $v){
    echo round($v, 2).'<br>' ;
}*/
$max = false;
$min = false;
$rand = false;
$num1 = false;
$num2 = false;
if(isset($_POST['number'])){
    $num1 = $_POST['num1'] ?? false;
    $num2 = $_POST['num2'] ?? false;
    if ($num1 !== false && $num2 !== false && is_numeric($num1) && is_numeric($num2))
        $min = min($num2, $num1);
    $max = max($num2, $num1);
    $rand = mt_rand($min, $max);


}
?>
<p> Number is :<?=$rand?></p>
<form name="number" action="<?=$_SERVER['REQUEST_URI']?>" method="POST">
    <div>
        First num: <input type="text" name="num1" value="<?=$num1?>"/>
    </div>
    <div>
        Second num: <input type="text" name="num2" value="<?=$num2?>"/>
    </div>
    <div>
        Entire: <input type="submit" name="number" value="random"/>
    </div>

</form>

