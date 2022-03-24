<?php
session_start();

include 'db.php';
$id = isset($_POST['id']) ? $_POST['id'] : "";

$machine_name = $_POST['machine_name'];
$description = $_POST['description'];

$sql = "update tbl_machine set machine_name = '".$machine_name."' , description = '".$description."' where id =".$id;

echo $sql;

if($results = $conn->query($sql)){
    $_SESSION['message'] = 'Updated Successfully';
    header("Location: index.php");
}
else{
    $_SESSION['message'] = 'Updatation failed';

}

?>