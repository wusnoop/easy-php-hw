<?php


    $select = @$_POST['select'];
    if(isset($_POST['Choose'])){


        setcookie('bg', '$color', time() +3600);

        if($select == 'red'){
            echo '<body style="background: #ff3128">';
        }
        elseif ($select == 'green'){
            echo '<body style="background: #2bff1d">';
        }
        elseif ($select == 'blue'){
            echo '<body style="background: #418aff">';
        }
    }




?>

    <form  method="post" action="<?=$_SERVER['PHP_SELF']?>">
        <select size="3" name="select">
            <option value="blue" name="b">
                Blue
            </option>
            <option value="green" name="g">
                Green
            </option>
            <option value="red" name="r">
                Red
            </option>
        </select>
        <input value="send" type="submit" name="Choose">
    </form>





