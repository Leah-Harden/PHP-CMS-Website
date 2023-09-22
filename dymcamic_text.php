<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $title = 'Hello! ';



    //Normal Arrays
    
    $array = [12312,3123] ;
    
    //can be written either way

    $normalName = array('asdf');

    $normalNumber = [10];
// Associative Arrays

$name = array('fn' => 'Leah');

$number = array('num' => 20);


    ?>

<h1>
    <?php
echo $title;
echo $array[0];  
?>
</h1>

<br>

<h1>
    <?php

echo $name['fn'];
?>

</h1>
<?php
//fix
echo $number(0) + $normalNumber('num'), '<br>';

?>

</body>
</html>