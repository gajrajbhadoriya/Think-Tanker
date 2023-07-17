<?php
 include "db_conn.php" ;

$result = mysqli_query($conn, "select * from images");
if(mysqli_num_rows($result)>0) {
    $html = '<table border="2" bgcolor="tan">';
    $html .= '<tr><td>id</td><td>images</td></tr>';
    while($row= mysqli_fetch_assoc($result)) { 
        // print_r($row);
        // exit();
        $html .= '<tr><td>'.$row['id'].'</td><td><img src="./uploads/'.$row["image_url"].'"style="height:100px;width:100px"></td></tr>';
    }
    $html .= '</table>';
    echo $html;
} else {
    $html = "Data not found";
}

$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($html); 
$mpdf->showImageErrors = true;
$file = time().'.pdf';
$mpdf->output($file,'D');
