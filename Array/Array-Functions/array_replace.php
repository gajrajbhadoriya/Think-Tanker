<?php

echo "(3) array_replace() id uesd for ? <br>";
echo "Answer : Replace the values of the first array variable a1 with the values from the second array variable a2:<br><br>";

$fruits = ['orange', 'banana', 'apple', 'grapes'];

$veggie = ['carrot', 'pea'];

$newArray = array_replace($fruits, $veggie);

echo "<pre>";
print_r($newArray);
echo "<pre>";