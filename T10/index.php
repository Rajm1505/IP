<?php
// session_start();

// if(!isset($_SESSION['username'])){
//     header('Location: login.php');
// }
include 'db.php';

$sql = "SELECT id,machine_name,description from tbl_machine where is_delete = 0 ";

$results = $conn ->query($sql);

// if($results->num_rows>0){
//    }


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {

        });
    </script>
    <title>Document</title>
</head>

<body>
   
    <div class="container">
        <h1>Registration Data</h1>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Sr.</th>
                    <th scope="col">Machine Name</th>
                    <th scope="col">Description</th>
                </tr>
            </thead>
            <?php
            $i = 1;
                 while($row = $results->fetch_assoc()){
                        
            ?>
            <tbody>
                <tr>
                    <td><?= $i ?></td>
                    <td><?= $row['machine_name'] ?></td>
                    <td><?= $row['description'] ?></td>
                    <td>
                        <a href="form.php" class="btn btn-warning">Edit</a>
                        <a href="action.php" class="btn btn-danger delete">Delete</a>
                    </td>
                </tr>
            </tbody>
            <?php
                 $i++;       
                    }
            ?>
        </table>
    </div>

</body>

</html>