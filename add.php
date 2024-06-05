<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>add</title>
</head>
<body>
    <a class="btn btn-primary m-2" href="index.php">Go to Home</a>
    <form action="add.php" method="post" name="form1">
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
                <td><button type="submit" class="btn btn-success " name="submit" value="add">add</button></td>
            </tr>
        </table>
    </form>

    <?php
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $class = $_POST['class'];
        $email = $_POST['email'];

        // include database connection file
        include_once("config.php");

        //insert user data into table
        $result = mysqli_query($conn, "INSERT INTO `mahasiswa`(`name`, `class`, `email`) VALUES ('$name','$class','$email')");

        //show message when user added
        echo "User added successfully.<a href ='index.php'>View user</a>";
    }
    ?>
</body>
</html>