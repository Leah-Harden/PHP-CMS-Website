<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <?php

    //Functions

    function say()
    {

        echo 'hello';
    };
    say();

    echo 'i am second';

    function cal($num, $num2)
    {

        $sum = $num +  $num2;

        return $sum;
    };
    // you need the comma  | here or it will see it as one thing
    $result = cal(cal(4, 4), +100);

    echo $result;

    function init()
    {
    };


    ?>

</body>

</html>