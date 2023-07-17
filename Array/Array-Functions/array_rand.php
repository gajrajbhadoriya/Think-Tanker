<?php

$cars=array("Volvo","BMW","Toyota","Honda","Mercedes","Opel");

$newArray = array_rand($cars);
echo "<pre>";
print_r($newArray);
echo "</pre>";

echo $cars[$newArray];