<?php

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];

$conn = mysqli_connect("localhost", "root", "", "test") or die("Connection failed");

$sql = "INSERT INTO student(firstname, lastname) VALUE ('{$first_name}', '{$last_name}')";
// $result = mysqli_query($conn, $sql) or die("Failed Sql Query");

if(mysqli_query($conn, $sql)){
    echo 1;
}else{
    echo 0;
}

?>