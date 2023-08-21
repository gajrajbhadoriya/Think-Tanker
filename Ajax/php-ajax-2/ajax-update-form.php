<?php
$conn = mysqli_connect("localhost", "root", "", "test") or die("Connection Failed");

$student_id = $_POST["id"];
$firstName = $_POST["first_name"];
$lastName = $_POST["last_name"];
$gender = $_POST["gender"];
$country = $_POST["country"];
$hobbies = isset($_POST['hobbies']) && is_array($_POST['hobbies']) ? $_POST['hobbies'] : [];

$hobbies_str = implode(',', $hobbies);

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
        $updatePhotoSql = "UPDATE task SET photo='$new_img_name' WHERE id=$student_id";
        mysqli_query($conn, $updatePhotoSql);
    }
}

$sql = "UPDATE task SET first_name = '{$firstName}', last_name = '{$lastName}', gender = '$gender', country = '$country', hobbies = '$hobbies_str' WHERE id = {$student_id}";

if (mysqli_query($conn, $sql)) {
    echo 1;
} else {
    echo 0;
}

?>
