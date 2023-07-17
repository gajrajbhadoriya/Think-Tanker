<?php

$per = 55;

if($per >= 80 && $per <=100) {
    echo "distiction" ;
} elseif($per >=60 && $per <80) {
    echo "you are in first division";
} elseif($per >= 40 && $per <60) {
    echo "you are in second division";
} else{
    echo "you are fail";    
}
