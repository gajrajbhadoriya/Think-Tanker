<?php

include "includes/db-connection.php";

$sql = "SELECT * FROM ajax_form";
// $sql = "SELECT * FROM ajax_form WHERE id={$_POST['id']}";


$result = mysqli_query($conn, $sql) or die ("Query failed");

$output = mysqli_fetch_all($result, MYSQLI_ASSOC);

echo json_encode($output);

?>