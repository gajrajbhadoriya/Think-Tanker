<?php 

include 'database.php';

$obj = new database();

$obj->select('students','*',null,null,null,3);
$result = $obj->getResult();	
// print_r($result);
echo "<table border='1' width='500px'>
		<tr>
			<td>Id</td>
			<td>Name</td>
			<td>Age</td>
			<td>City</td>
		</tr>";

foreach ($result as list("id"=>$id,"sname"=>$name,"sage"=>$age,"scity"=>$city)) {
	echo "<tr><td>$id</td><td>$name</td><td>$age</td><td>$city</td></tr>";
}

echo "</table>";
$obj->pagination('students',null,null,3);
?>