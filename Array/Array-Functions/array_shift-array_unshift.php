<?php

//array_shift function used for remove first element of the array
$fruits = ["apple", "banana", "mango", "orange"];
array_shift($fruits);

echo "<pre>";
print_r($fruits);
echo "</pre>";

//array_unshift function used for add first element of the array

$fruit = ["apple", "banana", "mango"];

array_unshift($fruit, "orange");
echo "<pre>";
print_r($fruit);
echo "</pre>";


