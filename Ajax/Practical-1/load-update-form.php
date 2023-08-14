<?php

include "includes/db-connection.php"; 

$student_id = $_POST["id"];
$conn = mysqli_connect("localhost", "root", "", "test") or die("Connection failed");

$sql = "SELECT * FROM student WHERE id={$student_id}";
$result = mysqli_query($conn, $sql) or die("Failed Sql Query");
$output = "";

if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
       $output .= "<tr>
        <td>
            Firstname
        </td>
        <td><input type='text' id='edit-fname' value='{$row["firstname"]}'>
        <input type='text' id='edit-id' hidden value='{$row["id"]}'>
        </td>
      </tr>
      <tr>
        <td>
            Lastname
        </td>
        <td><input type='text' id='edit-lname' value='{$row["lastname"]}'></td>
      </tr>
      <tr>
        <td> </td>
        <td><input type='submit' id='edit-submit' value='save'></td>
      </tr>";
    }
    
    mysqli_close($conn);     
    echo $output;
                                                     
}else{
    echo "<h2>No Record Found</h2>";
}

?>