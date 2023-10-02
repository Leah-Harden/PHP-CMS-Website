$_POST
<?php
//Getting data from forms!
if (isset($_POST['submit'])) {

    echo 'submitted';
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

        <input type='text' placeholder="username">
        <input type='password' placeholder="password">


        <!-- Name is getting sent -->
        <input type='submit' name='submit'>


    </form>


</body>

</html>