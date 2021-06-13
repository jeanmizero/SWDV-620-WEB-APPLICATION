<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 6 PHP</title>

</head>
<!-- HTML code -->
<h2>Fill out simple text form</h2>

<body>
    <form method="POST">
        <input type="text" name="Enter text">
        <input type="submit" value="Submit your text">
    </form>
    <!-- PHP code -->
    <?php
    if (isset($_POST["Enter text"])) {
    ?>
    <!-- Javascript code -->
    <script>
    alert("This is JavaScript");
    </script>
    <?php
    }
    ?>
    <!--Create a script that displays an image using a for loop and switch.  -->
    <?php
    for ($i = 1; $i <= 5; $i++) {
    ?>
    <img src="/photos/MaryvilleLogo.jpeg" style="width: 200px">
    <?php

        switch ($i) {
            case 1:
                echo "One";
                break;
            case 2:
            default:
                echo "Thingy";
                break;
            case 3:
            case 4:
                echo "Three or Four";
                break;
            case 5:
                echo "Five";
                break;
        }
    }
    ?>
    <!-- Arithmetic operation -->
    <?php
    $x = 100;
    $y = 50;
    // Addition
    echo "The sum of x and y: " . ($x + $y) . "<br />";
    // Subtraction
    echo "The difference between x and: " . ($x - $y) . "<br />";
    // Multiplication
    echo "Multiplication of x and y: " . ($x * $y) . "<br />";
    // Division
    echo "Division of x and y: " . ($x / $y) . "<br />";
    // Modulus
    echo "Modulus of x and y: " . ($x % $y) . "<br />";
    // Increment
    echo "increment: " . $x++ . "<br />";
    echo "Should be 101: " . $x . "<br />";
    //Decrement
    echo "Decrement of y : " . ($y--) . "<br />";
    echo "Should be 49: " . $y . "<br />";

    ?>
</body>

</html>