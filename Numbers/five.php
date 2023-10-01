<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <?php

    // NUMBERS FUNCTIONS
    echo '<h2>NUMBERS FUNCTIONS</h2>';
    echo '<br>';
    // 2 the 7th power
    echo pow(2, 7);

    echo '<br>';
    //random number from 1 to 100
    echo rand(1, 100);
    echo '<br>';
    // square root of 10
    echo sqrt(10);
    echo ' sqrt root<br>';

    //rounded up
    echo ceil(4.5);
    echo '<br>';
    //rounded down
    echo floor(2.4);
    echo '<br>';




    // STRING FUNCTIONS
    $string = 'Learn Everything';
    echo '<h2>STRING FUNCTIONS</h2>';
    echo '<br>';
    //string length
    echo strlen($string);
    echo '<br>';
    //string to uppercase
    echo strtoupper($string);
    echo '<br>';
    //string to lowercase
    echo strtolower($string);
    echo '<br>';



    // ARRAY FUNCTIONS
    echo '<h2>ARRAY FUNCTIONS</h2>';
    echo '<br>';
    $list = [4, 2, 7, 6, 1];

    //sorted from lowest to highest: will just return the first or the key you give it. 
    echo sort($list);
    echo '<br>';
    // Now, $list contains the sorted array
    echo implode(', ', $list);
    //there are more!!!


    ?>
</body>

</html>