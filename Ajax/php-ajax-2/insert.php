<?php

$conn = mysqli_connect("localhost", "root", "", "test") or die("Connection Failed");

$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];
$gender = isset($_POST['gender']) ? $_POST['gender'] : '';
$country = $_POST["country"];
$hobbies = isset($_POST['hobbies']) && is_array($_POST['hobbies']) ? $_POST['hobbies'] : [];
// $photo = $_FILES["photo"]; 
// var_dump($photo);
// exit();

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

$hobbies_str = implode(',', $hobbies);

$sql = "INSERT INTO task(first_name, last_name, gender, country, hobbies, photo) VALUES ('$first_name', '$last_name', '$gender', '$country', '$hobbies_str', '$new_img_name')";

if (mysqli_query($conn, $sql)) {
    echo 1;
} else {
    echo 0;
}


?>
