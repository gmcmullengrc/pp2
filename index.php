<?php include 'functions.php';

/*
 * Name: George McMullen & Patrick Dang
 * Date: Jav 15 2021
 * File URL:
 * Project name: Pair Program 2
 */



ini_set('display_errors', 1);
error_reporting(E_ALL);

echo "PHP Array Practice.";

$numbers = array(7, 9, 8, 9, 8, 8, 6);

printArr($numbers);

?> <br> <?php

echo "<br>Largest number in array: ";

largest($numbers);

?> <br> <?php

echo removeDups($numbers);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pair Program 2</title>
</head>
<body>
<h1>Pair Program 2</h1>
</body>
</html>