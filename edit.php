<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Edit user data</title>
</head>
<body>
    <a href="index.php" class="btn btn-primary m-2">Go to Home</a>
    <form action="edit.php" name="update_user" method="post">
    <table class="table table-striped m-2">
        <tr>
            <td>Name</td>
            <td><input type="text" name="name" value="<?php echo isset($name) ? $name : '';?>"></td>

        </tr>
        <tr>
            <td>Class</td>
            <td><input type="text" name="class" value="<?php echo isset ($class) ? $class : ''; ?>"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" name="email" value="<?php echo isset ($email) ? $email : ''; ?>"></td>
        </tr>
        <tr>
        <td><input type="hidden" name="id" value="<?php echo isset($_GET['id']) ? $_GET['id'] : ''; ?>"></td>
            <td><input type="submit" name="update" value="update" class="btn btn-primary"></td>
        </tr>
    </table>
    </form>
    <?php
    include_once("config.php");

    if(isset($_POST['update'])){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $class = $_POST['class'];
        $email = $_POST['email'];

        //update user data
        $result = mysqli_query($conn, "UPDATE mahasiswa SET name ='$name', email ='$email', class ='$class' WHERE id = $id");

        //Redirect to homepage to display update user in list
        header("Location: index.php");
    }
    ?>
    <?php
    //Display selected user data based on id
    //Getting id from url
    $id = $_GET['id'];

    //fetch user data based on id
    $result = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE id = $id");
    while ($user_data = mysqli_fetch_array($result)){
        $name = $user_data['name'];
        $email = $user_data['email'];
        $class = $user_data['class'];
    }
    ?>
</body>
</html>