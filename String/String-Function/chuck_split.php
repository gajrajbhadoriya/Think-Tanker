<?php
$string = "hello vaibhav ";

echo "<pre>";
print_r(chunk_split($string, 1, "."  . "<br >"));
print_r(str_split($string, 2));
echo "</pre>";