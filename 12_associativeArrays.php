<!-- <?php
    //associative array = Array made of Key => Value pairs
    // eg : countries => capitals, item => price etc

    $capitals = array( "USA" => "Washintgon DC",
                        "Japan" => "Tokyo",
                        "South Korea" => "Seoul",
                        "South Africa", // if we dont give a pair, it will take the given string as its value as take 0 as key, the more the we add, the more numbers it takes, like 0,1,2,3,4..
                        "India" => "New Delhi");


    //updation

    $capitals["USA"] = "Las Vegas"; // changed DC to Vegas

    // addition:
    $capitals["China"] = "Beijing"; // can add as key value pair

    //to add only value
    array_push($capitals, "Srilanka"); // as said above, will consider this as value and key as 1 (because 0 is taken already)
    
    // removal :

    array_pop($capitals); // removes the last key value pair

    //shift : Removes the first element.

    array_shift($capitals); // removes USA

    //to view only keys
    // $keys = array_keys($capitals);

    // foreach($keys as $key) {
    //     echo "{$key} <br>";
    // }

    // to flip

    // $capitals = array_flip($capitals);

    // to reverse the array

    $capitals = array_reverse($capitals);


    foreach($capitals as $key => $value) {
        echo "For {$key}, its capital is {$value} <br>";
    }
?> -->


<!-- TASK : TO create a form where a user enters the value and gets its capital in return -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "12_associativeArrays.php" method = "post">
        <label> Enter Country name: <br></label>
        <input type = "text" placeholder="Enter your country Here" name = "country">
        <input type = "submit" >
    </form>
</body>
</html>
<?php

$capitals = array( "USA" => "Washintgon DC",
"Japan" => "Tokyo",
"South Korea" => "Seoul",
"India" => "New Delhi");

// accessing the value using key (arrayName[key] -> value)
$capital = $_POST["country"];
echo $capitals[$capital];

// another way:
$capital = $capitals[$_POST["country"]] ?? null;
echo "The capital is: {$capital}";

// one way to do this (using switch [only if there are countable key value pairs, if there are 100, you cant do this as it will take a long time])
switch ($capital) {
    case "USA":
        echo "Washington DC";
        break;
    case "Japan":
        echo "Tokyo";
        break;
    case "South Korea":
        echo "Seoul";
        break;
    case "India":
        echo "New Delhi";
        break;
    default:
        echo "Check your spellings";
        break;
}
?>