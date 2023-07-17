<?php
$str = "RWNAK4323A";

$newStr = preg_match('/^[A-Z]{5}[0-9]{4}[A-Z]{1}$/', $str);

if($newStr){
    echo "card details successfully match";
}
else{
    echo "not match card deatils...!!!";
}