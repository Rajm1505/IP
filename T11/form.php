<?php
include 'db.php';

$id = isset($_GET['id']) ? $_GET['id'] : "";

$sql = 'SELECT machine_name,description from tbl_machine where id =  '.$id;

$results = $conn -> query($sql);

$row = $results->fetch_assoc();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <form action="edit.php" method="post">
            <div class="form-group">
                
                <input type="hidden" value="<?=$id?>" class="form-control" name="id" name="machine_name" placeholder="No entry" name="email">
            </div>
            <div class="form-group">
                <label for="email">Machine name</label>
                <input type="text" value="<?=$row['machine_name'] ?>" class="form-control" name="machine_name" placeholder="No entry" name="email">
            </div>
            <div class="form-group">
                <label for="pwd">Description</label>
                <input type="text" value="<?=$row['description'] ?>" class="form-control" name="description" placeholder="No entry" name="pwd">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>

</body>

</html>