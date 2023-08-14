<?php

include "includes/db-connection.php";

$student_id = $_POST['id'];

$sql = "DELETE FROM student WHERE id= {$student_id}";
// $result = mysqli_query($conn, $sql) or die("Failed Sql Query");

if (mysqli_query($conn, $sql)) {
    echo 1;
} else {
    echo 0;
}
