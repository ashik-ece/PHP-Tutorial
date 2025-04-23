<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "05_mathFunctions.php" method = "post">
        <label>X : </label>
        <input type="text" name = "x">  <br>
        <label for="">Y: </label>
        <input type="text" name = "y">
        <input type = "submit" value = "Calculate">
    </form>
</body>
</html>

<?php
    $valX = $_POST["x"];
    $valY = $_POST["y"];

    // $total = abs($val);
    // echo $total;
    
    // echo abs($valX); // gives the absolute value of a number (positive number)
    // echo round($valX); // rounds up the number (>=6.5 -> 7 else 6) 
    // echo round($valX, 2) // rounds up the number to 2 digits
    // echo floor($valX); //rounds down the number (5.9 -> 5)
    // echo ceil($valX); // will always round up (6.1111 -> 7 & 6.9999 -> 7)
    // echo sqrt($valX);
    // echo pow($valX, $valY); // X ^ y
    // echo max(%valX,$valY) // can be multiple variables as well (3 or more)
    // echo min($valX, $valY) // can be multiple varaibles as well
    // echo pi(); // gives 3.14592 -> pi value
    // echo rand(); //gives the random number (upto 2 billion)
    // echo rand(min number, max number) //wihtin the parenthesis, we put the range of the random number being generated.





?>