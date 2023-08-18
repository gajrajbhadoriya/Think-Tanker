<?php

  include "includes/db-connection.php";

  $limitPerPage = 5;

  if(isset($_POST["page_no"])){
    $page = $_POST["page_no"];
  }else{
    $page = 1;
  }
  
  $offset = ($page - 1)* $limitPerPage;

  $sql = "SELECT * FROM student LIMIT {$offset}, {$limitPerPage}";
  $result = (mysqli_query($conn, $sql)) or die("unsucessfull query");

  $output= "";
  if(mysqli_num_rows($result) > 0){
    $output .= '<table border="1" width="100%" cellspacing="0" cellpadding="10px">
      <tr>
        <th width="100px">Id</th>
        <th>Name</th>
      </tr>';
      while($row = mysqli_fetch_assoc($result)) {
        $output .= "<tr><td align='center'>{$row["id"]}</td><td>{$row["firstname"]} {$row["lastname"]}</td></tr>";
      }
    $output .= "</table>";

    $sqlTotal     = "SELECT * FROM student";
    $record       = mysqli_query($conn, $sqlTotal) or die("Query unsuccessfull");
    $totalRecord  = mysqli_num_rows($record);
    $totalPages   = ceil($totalRecord/$limitPerPage);
    
    $output .='<div id="pagination">';

    for($i= 1; $i <= $totalPages; $i++){
      if($i == $page){
        $className = "active";
      }else{
        $className = "";
      }
      $output .= "<a class='{$className}' id='{$i}' href=''>{$i}</a>";
    }
    $output .='</div>';

    echo $output;
  }else{
    echo "<h2>No Record Found.</h2>";
  }
?>
