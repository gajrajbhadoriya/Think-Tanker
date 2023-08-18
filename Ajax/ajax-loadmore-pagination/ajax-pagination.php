<?php
include "includes/db-connection.php";

$limit = 5;
$page = isset($_POST['page_no']) ? $_POST['page_no'] : 0;
$offset = $page * $limit;

$sql = "SELECT * FROM student LIMIT $offset, $limit";
$query = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

$output = "";
while ($row = mysqli_fetch_assoc($query)) {
    $output .= "<tr><td align='center'>{$row["id"]}</td><td>{$row["firstname"]} {$row["lastname"]}</td></tr>";
}
echo $output;

mysqli_close($conn);
?>
