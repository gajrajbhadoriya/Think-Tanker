<?php

//its return unique value from the assoc array
$array1 = [
    "a" => "red",
    "b" => "green",
    "c" => "yellow",
    "d" => "red"
];

$newArray = array_unique($array1);

echo "<pre>";
print_r($newArray);
echo "</pre>";