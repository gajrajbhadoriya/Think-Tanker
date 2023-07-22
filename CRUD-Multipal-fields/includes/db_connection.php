<?php

$conn = mysqli_connect('localhost', 'root', '', 'westside');

if(!$conn){
    echo "connection failed";
    die();
}

?>