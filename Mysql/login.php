<?php

//put code here
if (isset($_POST['submit'])) {

    $connection = mysqli_connect('localhost', 'root', '', 'loginapp');

    if ($connection) {
        echo 'working';
    } else {

        die('die');
    };

    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username && $password) {

        echo "yes";
    }


    $query = 'INSERT INTO users(username,password)';
    // Assuming you have a database connection established
    $stmt = $pdo->prepare("INSERT INTO users (username, password) VALUES (:username, :password)");
    $stmt->bindParam(':username', $username, PDO::PARAM_STR);
    $stmt->bindParam(':password', $password, PDO::PARAM_STR);

    // Set the values of $username and $password here

    $stmt->execute();
    $result = mysqli_query($connection, $query);

    if (!$result) {
        die('FAILED');
    };
};

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
        <div class="col-xs-6">
            <form action="login.php" method="post">
                <div class="form-group">
                    <label for="username" value="username">Username</label>
                    <input type="text" class="form-control">
                </div>
                <div>
                    <label for="password">Password</label>
                    <input type="password" class="form-control">
                </div>
                <input class="btn btn-primary" name="submit" type="submit" value="submit">
            </form>

        </div>
    </div>



</body>

</html>