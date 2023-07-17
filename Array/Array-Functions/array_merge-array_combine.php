<?php

// array_merge function used for Merge two arrays into one array:
$fruits = ['orange', 'banana', 'apple', 'grapes'];

$veggie = ['carrot', 'pea'];

$newArray = array_merge($fruits, $veggie);

echo "<pre>";
print_r($newArray);
echo "<pre>";

// Create an array by using the elements from one "keys" array and one "values" array:

$fname=array("Peter","Ben","Joe");
$age=array("35","37","43");

$c=array_combine($fname,$age);
print_r($c);
?>

