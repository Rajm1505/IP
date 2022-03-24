<?php
session_start();
include 'db.php';

$id = isset($_GET['id']) ? $_GET['id']:"";
$sql = "update tbl_machine set is_delete = 1 where id = $id";

if($conn->query($sql)){
    $_SESSION['message'] = 'Deleted Successfully';
    header("Location:index.php");
}


?>