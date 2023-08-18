<?php

include "includes/db-connection.php";

$name = $_POST["fullname"];
$age = $_POST["age"];
$dob = $_POST["dob"];
$gender     = isset($_POST['gender']) ? $_POST['gender'] : '';
$country = $_POST["country"];
$vehicle    = isset($_POST['vehicle']) && is_array($_POST['vehicle']) ? $_POST['vehicle'] : [];
// $photo = $_POST["photo"];

if (empty($_FILES["photo"]["name"])) {
    $errors["photo"] = "Photo is required.";
} else {
    $photo      = $_FILES["photo"];
    $img_name   = $photo["name"];
    $img_size   = $photo["size"];
    $tmp_name   = $photo["tmp_name"];
    $img_error  = $photo["error"];

    $img_ex     = pathinfo($img_name, PATHINFO_EXTENSION);
    $allowed_exs = array("jpg", "png", "jpeg");

    if (in_array($img_ex, $allowed_exs)) {
        $new_img_name       = uniqid("IMG-", true). '.' . $img_ex;
        $img_upload_path    = 'uploads/'. $new_img_name;
        move_uploaded_file($tmp_name, $img_upload_path);
    }
}


$sql = "INSERT INTO task(fullname, age, dob, gender, country, vehicle,photo) VALUES ('{$name}','{$age}','{$dob}','{$gender}','{$country}','{$vehicle}','{$new_img_name}')";

if(mysqli_query($conn, $sql)){
  echo 1;
}else{
  echo 0;
}


?>
