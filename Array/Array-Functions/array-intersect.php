<?php

$array1 = [
    "a" => "red",
    "b" => "green",
    "c" => "yellow",
    "d" => "blue"
];

$array2 = [
    "a" => "red",
    "b" => "green",
    "c" => "purple"
];

$newArray = array_intersect($array1 , $array2);

print_r($newArray);