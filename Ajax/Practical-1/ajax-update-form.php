<?php

include "includes/db-connection.php";

$studentID = $_POST['id'];
$firstName = $_POST['first_name'];
$lastName = $_POST['last_name'];

// $conn = mysqli_connect("localhost", "root", "", "test") or die("Connection failed");

$sql = "UPDATE student SET firstname = '{$firstName}', lastname = '{$lastName}' WHERE id={$studentID}";
// $result = mysqli_query($conn, $sql) or die("Failed Sql Query");

if(mysqli_query($conn, $sql)){
    echo 1;
}else{
    echo 0;
}

?>