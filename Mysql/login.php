<?php

//put code here
if (isset($_POST['submit'])) {
    if (isset($_POST['username']) && isset($_POST['password'])) {
        // MySQLi Configuration
        $hostname = 'localhost';
        $username = 'root';
        $password = '';
        $database = 'loginapp';

        $connection = mysqli_connect($hostname, $username, $password, $database);

        if (!$connection) {
            die('Connection failed: ' . mysqli_connect_error());
        }
        $username = mysqli_real_escape_string($connection, $_POST['username']);
        $password = mysqli_real_escape_string($connection, $_POST['password']);


        //$query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";

        $query = 'SELECT * FROM users';
        //$result = '';
        $result = mysqli_query($connection, $query);

        if (!$result) {
            die('Insert failed: ' . mysqli_error($connection));
        } else {
            echo 'Insert successful';
        }
    };
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <?php
        while ($row = mysqli_fetch_row($result)) {
            // Access specific columns using the keys and print them
            echo "Username: " . $row['username'] . "<br>";
            echo "Password: " . $row['password'] . "<br>";
        };
        ?>
        <form action="login.php" method="post">
            <div class="form-group">
                <label for="username" value="username">Username</label>
                <input type="text" name="username" class="form-control">
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" name='password' class="form-control">
            </div>
            <input class="btn btn-primary" name="submit" type="submit" value="submit">
        </form>

    </div>
    </div>





</body>

</html>