<?php

include_once("config.php");
$result = mysqli_query($conn, "SELECT *FROM mahasiswa");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>CRUD</title>
</head>
<body>
    <h1 class="text-center m-2 ">Membuat CRUD dengan php mysql</h1>
    <a href="add.php" class='btn btn-primary m-3'>Add New</a>
    <!-- <a href="add.php">Add new user</a><br><br> -->
    <table class="table table-striped mt-3 mb-3 ">
        <tr>
            <th>Name</th>
            <th>Class</th>
            <th>Email</th>
            <th>Update</th>
        </tr>
        <?php
            while ($data = mysqli_fetch_array($result)){
                echo "<tr>";
                echo "<td>".$data['name']."</td>";
                echo "<td>".$data['class']."</td>";
                echo "<td>".$data['email']."</td>";
                echo "<td><a class='btn btn-warning' href='edit.php?id={$data['id']}'>Edit</a>
                <a class='btn btn-danger' href='delete.php?id={$data['id']}'>Delete</a>
                <a class='btn btn-success' href='add.php?id={$data['id']}'>Add</a>";
            }
        ?>
    </table>
</body>
</html>