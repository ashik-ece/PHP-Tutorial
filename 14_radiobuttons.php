<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="14_radiobuttons.php" method = "post">
        <label for="">Credit Card Selection</label> <br>
        <input type="radio" name="Credit_Card" value="Visa"> 
        Visa <br>
        <input type="radio" name = "Credit_Card" value="MasterCard">
        MasterCard <br>
        <input type="radio" name = "Credit_Card" value = "Amex">
        AmexCard <br>
        <input type="submit" value = "Select">
    </form>
</body>
</html>

<?php
// common name in html form makes sures only one value is selected
    // if(isset($_POST["Credit_Card"])) {
    //     echo $_POST["Credit_Card"]; // gives the value (not name)
    // } else {
    //     echo "Please Select a Card";
    // }

    if(isset($_POST["Credit_Card"])) {
        $Credit_Card = $_POST["Credit_Card"];

        switch($Credit_Card) {
            case "Visa":
                echo "You have selected Visa";
                break;
            case "MasterCard" :
                echo "You have selected MasterCard";
                break;
            case "Amex":
                echo "You have Selected Amex";
                break;
        }
    } else {
        echo "Please Select a Card to Proceed";
    }
?>