<?php

session_start();

$username = $_POST['username'];
$password = $_POST['password'];



if(($username == 'raj') && ($password == '123')){
    if(isset($_POST['rememberme'])){
        setcookie('user',$username,60+time());
        setcookie('password',$password,60+time());
    }
    else{
        setcookie('user',$username,time());
        setcookie('password',$password,time());
    }
    $_SESSION['username'] = $username;
    header('location: index.php');
}
else{
    $_SESSION['logginfailed'] = 'Invalid username or password';
    header('location: login.php');
}




?>