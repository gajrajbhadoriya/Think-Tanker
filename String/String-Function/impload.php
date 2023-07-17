<?php

// implode function used for escaping string values in strings

$array = [1,2,3,4,5,6,7,8];
$arrayNew = ["this", "is" , "laravel", "testing", "perpose"];

$newString = implode(',' , $array); // , is a coma separated string
$simpleString = implode(' ' , $arrayNew); // its a space separated string


echo "<pre>";
print_r($newString . "<br>") ;
print_r($simpleString); 
echo "</pre>";