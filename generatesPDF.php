<?php

require('vendor/autoload.php');
$con = mysqli_connect('localhost', 'root', '', 'swatantra');

$result = mysqli_query($con, "select * from user");
if(mysqli_num_rows($result)>0) {
    $html = '<table border="2" bgcolor="tan">';
    $html .= '<tr><td>ID</td><td>category</td><td>email</td><td>firstname</td></tr>';
    while($row= mysqli_fetch_assoc($result)) {
        $html .= '<tr><td>'.$row['id'].'</td><td>'.$row['category'].'</td><td>'.$row['email'].'</td><td>'.$row['firstname'].'</td></tr>';
    }
    $html .= '</table>';
    echo $html;
} else {
    $html = "Data not found";
}

$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($html); 
$file = time().'.pdf';
$mpdf->output($file,'D');
