<?php

function square($n)
{
    return $n * $n;
}

$arrayMap = [1,2,3,4,5,6,7,8,9,10];

$newArray = array_map('square', $arrayMap);

echo "<pre>";
print_r($newArray);
echo "</pre>";
