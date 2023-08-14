<?php

$conn = mysqli_connect("localhost", "root", "", "test") or die("Connection failed");

$sql = "SELECT * FROM student";
$result = mysqli_query($conn, $sql) or die("Failed Sql Query");
$output = "";

if(mysqli_num_rows($result) > 0){
    $output = '<table border="1", width="100%", cellspacing="0", cellpadding="10px">
    <tr>
     <th width="50px">ID</th>
     <th>Firstname</th>
     <th>Lastname</th>
     <th width="90px">Edit</th>
     <th width="90px">Delete</th>
    </tr>';

    while($row = mysqli_fetch_assoc($result)){
       
        $output .= "<tr><td>{$row["id"]}</td><td>{$row["firstname"]}</td><td>{$row["lastname"]}</td><td><button class='edit-btn' data-eid='{$row["id"]}'>Edit</button></td><td><button class='delete-btn' data-id='{$row["id"]}'>Delete</button></td></tr>";
    }
    $output .= "</table>";
    
    echo $output;
    mysqli_close($conn);                                                        
}else{
    echo "<h2>No Record Found</h2>";
}

?>