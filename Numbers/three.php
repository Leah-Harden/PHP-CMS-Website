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
    // Indentical: ===
    // Greater/Less than: > , <
    // Greater/Less than or equal: >= , <=
    // Not Equal: !=
    // Not Indentical: !==
    
    // OR: ||
    // AND: &&


//IF statements 

if(3 < 10 ){
        echo '3 is less then 10';
//true
};

if(3 < 10 ){
        echo '3 is greater then 10';
//false

//this can also be true
//elseif(1 = 1) {

} else {
        echo 'not true';
};



//Switch statements 
    
    $switchNumber = 34;

switch($switchNumber) {

    case 32:
    echo '32';
        break;
    case 33:
    echo '33';
        break;
    case 34:
    echo '34';
        break;

        default:
            echo 'none found';
                    break;

};


//Loops
    $counter = 0;

//while
    while($counter <= 5){
        echo $counter;
    $counter++;
    };

//for
    for ($counterfor = 0; $counterfor < 4; $counterfor++) {
        echo $counterfor . '<br>';

};

    ?>

<h1>
    <?php


?>

</h1>


</body>
</html>