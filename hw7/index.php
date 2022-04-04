<?php

class Valid {


    public static function validEmail($email){

        if ($email === "") throw new Exception("E-mail не указан");
        elseif (!preg_match("/[0-9a-z]+@[a-z]+\.[a-z]+/", $email)) throw new Exception("E-mail указан неправильно");
        elseif (preg_match("/[0-9a-z]+@[a-z]+\.[a-z]+/", $email)) return true;

    }

}
$valid = new Valid();
try {

    $valid->validEmail('123@as.ru');
} catch (Exception $e){
    echo $e->getMessage();
}

