<?php
$date1 = new DateTime();
$date2 = new DateTime();

$date1->setDate(mt_rand(2000, 2025), mt_rand(1, 12), mt_rand(1, 30));
$date1->setTime(mt_rand(0, 23), mt_rand(0, 59), mt_rand(0, 59));

$date2->setDate(mt_rand(2000, 2025), mt_rand(1, 12), mt_rand(1, 30));
$date2->setTime(mt_rand(0, 23), mt_rand(0, 59), mt_rand(0, 59));


echo $date1->format('Y-m-d || H-i-s').'<br>';
echo $date2->format('Y-m-d || H-i-s').'<br>';

$interval = new DateInterval('P1D');
$period = new DatePeriod($date1 , $interval, $date2);
foreach ($period as $dt){
    echo $dt->format('Y-m-d || H-i-s').'<br>';
}

