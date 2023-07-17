<?php
require('../vendor/autoload.php');
$conn = mysqli_connect('localhost', 'root', '', 'swatantra');

if(!$conn){
    echo "connection failed";
    die();
}

?>