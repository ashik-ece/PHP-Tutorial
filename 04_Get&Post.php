<!-- NOTES: $_GET and $_POST
 
$_GET and $_POST = special variable used to collect data from an HTML Form
                    data is sent to the file in the action attribute of the <form>
                    <form action = "some_file.php" method = "get"> // or "post"

$GET = Data is appended to the URL
       NOT SECURE
       char limit
       bookmark is possible with values
       GET requst can be Cached.
       BETTER For a Serach Page

$POST = Data is packaged inside the body of the HTTP Request
        MORE Secure
        No data limit
        Cannot Bookmark
        GET requst are not cached
        Better for submitting credentials

 
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "04_Get&Post.php" method = "get">
        <label> Quantity </label> <br>
        <input type = "text" name = "quantity" > <br>
        <!-- <label for=""> password </label> <br>
        <input type = "password" name = "password"> <br> -->
        <input type = "submit" value="Confirm">
    </form>

</body>
</html>

<?php
    $price = 4.99;
    // echo "{$_POST["username"]} <br>" // another method to invoke $_POST
    $quantity = $_GET["quantity"];
    $total = null;
    $total = $price * $quantity;

    echo "You have ordered {$quantity} of pizza each worth {$price} <br>";
    echo "The total cost for you oder is: {$total}";
?>