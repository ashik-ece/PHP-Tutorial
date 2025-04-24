<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<?php
    // arrays can hold more than one value of similar datatype

    $foods = array("Apple", "orange", "Papaya");
    // echo $foods[0] . "<br>";
    // echo $foods[1] . "<br>";
    // echo $foods[2] . "<br>";

    //updation

    $foods[1] = "Pineapple";

    //addition

    array_push($foods, "Banana");
    array_push($foods, "Carrot");


    // Deletion

    // array_pop($foods);

    // shift

    // array_shift($foods);

    // reverse

//    $reverse = array_reverse($foods); // we can also put this in the same array

//    foreach($reverse as $food) {
//     echo $food . "<br>";
//    }

    //easier way to do this

    // foreach($foods as $food) {

    //     echo $food . "<br>";

    // }

    //count

    echo count($foods);
?>
