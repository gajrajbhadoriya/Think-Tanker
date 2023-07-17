<?php

echo "(4)Array_pop<br>";
echo "Answer: Delete the last element of an array";

$fruits = ['orange', 'banana', 'apple', 'grapes'];

array_pop($fruits);
echo "<pre>";
    print_r($fruits);
echo "</pre>";

echo "(5)Array_push<br>";
echo "Answer: Insert 'blue' and 'yellow' to the end of an array: <br><br>";

$a=array("red","green");
array_push($a,"blue","yellow");
echo "<pre>";
print_r($a); 
echo "</pre>";
?>



