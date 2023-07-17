<?php

$string = "Hello world. the world is nice..!!!" ;

$find = ["Hello", "world"];
$findIncensitive = ["HELLO", "world"];
$replace = ["hii", "earth"];

// echo str_replace("world", "earth", $string );
echo str_replace($find , $replace, $string ) . "<br>" ; // str_replace will replace some characters.
echo str_ireplace($findIncensitive , $replace , $string ); // str_replace its same as str_replace but its working on case-incensitive