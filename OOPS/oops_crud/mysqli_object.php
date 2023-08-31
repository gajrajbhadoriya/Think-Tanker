<?php 

$servername = "localhost";
$username = "root";
$password= "Root@123";
$dbname = "test";

$conn = new mysqli($servername,$username,$password,$dbname);

if ($conn->connect_error) {
	die("connection failed : " .$conn->connect_error);
}

$sql =  "SELECT * FROM students";
$res = $conn->query($sql);

if ($res->num_rows > 0) {
	while ($row= $res->fetch_assoc()) {
		echo "ID: {$row['id']} - Name: {$row['sname']} - Age: {$row['sage']} - City : {$row['scity']} <br>";
	}
}else{
		echo "nooo";
	}
?>