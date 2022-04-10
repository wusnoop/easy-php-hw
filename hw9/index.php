<?php
    $select = @$_POST['select'];
    $form =@$_POST['myform'];
    if(isset($form)){
        if($select == 'yandex'){
            header('Location: https://yandex.ru');
        }
        else if($select == 'google'){
            header('Location: https://google.ru');
        }
    }



?>
<form  method="post" action="<?=$_SERVER['PHP_SELF']?>">
 <select size="2" name="select">
     <option value="yandex" name="y">
         Yandex
     </option>
     <option value="google" name="g">
         Google
     </option>
 </select>
    <input type="submit" value="Send" name="myform">
</form>



