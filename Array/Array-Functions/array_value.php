<?php

$array1 = [
    "a" => "red",
    "b" => "green",
    "c" => "yellow",
    "d" => "blue"
];

$newArray = array_values($array1);

echo "<pre>";
print_r($newArray);
echo "</pre>";