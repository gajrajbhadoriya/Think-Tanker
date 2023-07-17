<?php

echo "(2) in_array and Array_search() function <br>";

echo "Answer: array_search function used for Array_search in element of array, element exists or not  <br><br>";

$food = ['vadapav', 'dabeli', 'puff'];

if(in_array('vadapav', $food)){
    echo ' message: find sucessfully...!!<br>';
}else{
    echo "Can't find <br>";
}


$foods = ['vadapav', 'dabeli', 'puff'];

echo " Array_search is return a index of they array : " . Array_search('vadapav', $foods);