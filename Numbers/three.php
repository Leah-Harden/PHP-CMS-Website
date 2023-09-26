<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // GUIDE

    // Equal: ==
    // Identical: ===
    // Greater/Less than: > , <
    // Greater/Less than or equal: >= , <=
    // Not Equal: !=
    // Not Identical: !==

    // OR: ||
    // AND: &&


    //IF statements 

    if (3 < 10) {
        echo ' <br> 3 is less then 10 <br> <br>';


        // if this just 'if' it will automatically be run because there is no break that stops it 
    } elseif (3 < 10) {
        echo '3 is greater then 10 <br>';


        //elseif(1 = 1) {
    } else {
        echo 'not true  <br>';
    };



    //Switch statements 

    $switchNumber = 34;

    switch ($switchNumber) {

        case 32:
            echo 'the switchNumber is :32  <br>';
            break;
        case 33:
            echo 'the switchNumber is : 33  <br>';
            break;
        case 34:
            echo 'the switchNumber is :34  <br>';
            break;

        default:
            echo 'none found  <br>';
            break;
    };


    //Loops
    $counter = 0;

    //while
    while ($counter <= 5) {
        //use a . not a +
        echo 'this is a WHILE loop' . $counter . '<br> ---- <br>';
        $counter++;
    };

    //for
    for ($counterFor = 0; $counterFor < 4; $counterFor++) {
        echo 'this is a FOR loop' .  $counterFor . '<br>';
    };

    ?>

    <h1>
        <?php


        ?>

    </h1>


</body>

</html>