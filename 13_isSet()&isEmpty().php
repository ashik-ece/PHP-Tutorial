<!-- isset() = Returns TRUE if a variable is declared and not null
isempty() = Returns TRUE if a variable is not declared, false, null -->

<!-- <?php
    $username1 = "Bro Code";
    $username2 = null;
    $username3 = false;
    $username4 = "";
    echo isset($username); // the output is 1, in php 1 -> True
    echo isset($username2); // the output will display nothing, meaning its false.
    echo isset($username3); // output - 1, meaning isset -> true
    echo isset($username4); // output - 1, meaning isset -> true

    $username = ""; //output - variable is empty
    $username = false; // output - empty
    // $username = "empty" // output - empty.
    $username = true; // OP : Not empty
    $username = null; // OP ":Empty (empty() -> true)
    $username = "Bro Code"; // OP: Not Empty (empty() - > False)


    if(empty($username)) {
        echo "This variable is empty";
    } else {
        echo "This variable is not empty";
    }

?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
</head>
<body>
    <form action="13_isSet()&isEmpty().php" method = "post">
        <label for="">username: </label>
        <input type="text" placeholder="Enter your username" name = "username"> <br>
        <label for="">Password: </label>
        <input type="password" placeholder="Enter your password" name = "password"> <br>
        <input type = "submit" value="Login">
    </form>
</body>
</html>

<?php
    // TASK : Create a login form and validate/ check whether username and password is entered and not empty
    // $username = $_POST["username"];
    // $password = $_POST["password"];

    // if(empty($username) && empty($$password)) {
    //     echo "username not valid";
    // } else {
    //     echo "username valid";
    // }
    // echo "<br>";
    // if(isset($username) && isset($password)) {
    //     echo "Password valid";
    // } else {
    //     echo "password not valid";
    // }

    /**
     * foreach($_POST as $key => $value) {
     *      echo "{$key} = {$value} <br> "; 
     * }
     */

    // if(empty($username)) {
    //     echo "Invalid Username <br>";
    // } else if(isset($username)) {
    //     echo "Username valid <br>";
    // }
    // if(empty($password)) {
    //     echo "Invalid Password <br>";
    // } else if(isset($password)) {
    //     echo "Valid Password";
    // }

    if(isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if(empty($username))
        echo "USername is missing";
    } else if(empty($password)) {
        echo "Password is missing";
    }
    else {
        echo "Hello {$username}";
    }

?>