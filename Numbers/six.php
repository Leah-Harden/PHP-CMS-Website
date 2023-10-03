<?php
//Getting data from forms!
if (isset($_POST['submit'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    if
    //(strlen($username || $password) < 8) this return a boolean value (either true or false), it will return true
    (strlen($username) < 8 || strlen($password) < 8) {
        echo "username and password must be at least 8 characters long";
    } else {
        echo 'hello ' . $username;
    };
};

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


</head>

<body>
    <!-- Getting data from forms! -->
    <form action='six.php' method="post">

        <input type='text' name='username' placeholder="username">
        <input type='password' name="password" placeholder="password">


        <!-- Name is getting sent -->
        <input type='submit' name='submit'>


    </form>


</body>

</html>