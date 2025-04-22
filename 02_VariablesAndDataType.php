<?php
    $name = "Jason"; //string
    $age = 23; //number
    $food = "pizza"; //string

    $gpa = 3.5; //float
    $online = true; // boolean (will print 1 if true and will print nothing if false)
    $quantity = 2;
    $price = 4.99;

    echo "Hello {$name} <br>";
    echo "My age is {$age}";

    $total = null;

    echo "Thank you for placing order <br>";
    echo "Your order is {$food} of quantity {$quantity} ";
    $total = $quantity * $price;
    echo "Your total is: \${$total}";


?>