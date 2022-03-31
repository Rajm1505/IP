<?php
$conn = new mysqli('localhost','root','','rkuniversity');

if($conn->connect_error){
    echo $conn-> connect_error;
    echo 'Connection failed';
}
else{
    echo 'connection established';
}

?>