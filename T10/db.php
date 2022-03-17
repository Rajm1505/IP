<?php 
$server = "localhost";
$username = "root";
$password = "";
$dbname = "tutorial10";


$conn = new mysqli($server, $username, $password,$dbname);

if($conn -> connect_error){
    echo "Connection failed" . $conn -> connect_error;
}
// else{
//     echo "connection established";
// }

?>