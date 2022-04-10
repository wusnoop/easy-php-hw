<?php
    session_start();
    $error = false;
    if(isset($_POST['auth'])){
        $_SESSION['login'] = $_POST['login'];
        $_SESSION['password'] = md5($_POST['password']);
        $error = true;
    }
    if(isset($_GET['f']) && $_GET['f'] === 'logout'){
        unset($_SESSION['login']);
        unset($_SESSION['password']);
    }
    $login_admin = 'admin';
    $password_admin = 'd8578edf8458ce06fbc5bb76a58c5ca4';
    $login_moder = 'moderator';
    $password_moder = '7815696ecbf1c96e6894b779456d330e';
    $auth = false;
    $isset = isset($_SESSION['login']) && isset($_SESSION['password']);
    if($isset && $_SESSION['login'] === $login_admin && $_SESSION['password'] === $password_admin){
        echo "Hello $login_admin".'<br>';
        echo '<a href="index.php?f=logout">Exit</a>';
        $auth = true;
        $error = false;
    }
    if($isset && $_SESSION['login'] === $login_moder && $_SESSION['password'] === $password_moder){
        echo "Hello $login_moder".'<br>';
        echo '<a href="index.php?f=logout">Exit</a>';
        $auth = true;
        $error = false;
    }
    ?>
<?php if($error){ ?><p> Wrong Login or Password </p> <?php } ?>
<?php if(!$auth){ ?>
<form name="auth" method="post" action="index.php">
    <p>
        Login : <input name="login" type="text">
    </p>
    <p>
        Pass  : <input name="password" type="password">
    </p>
    <p>
        <input type="submit" value="Enter" name="auth">
    </p>
</form>
<?php } ?>