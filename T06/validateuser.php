<?php

session_start();

$username = $_POST['username'];
$password = $_POST['password'];

if(($username == 'raj') && ($password == '123')){
    $_SESSION['username'] = $username;
    header('location: index.php');
}
else{
    $_SESSION['logginfailed'] = 'Invalid username or password';
    header('location: login.php');
}


?>