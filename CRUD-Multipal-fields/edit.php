<?php
include 'includes/db_connection.php';

$error_msg = "";

if (isset($_POST['submit'])) {
    $id = $_GET['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    // $serializedHobbies = serialize($_POST['hobbies']);
    $serializedHobbies = implode(',', $_POST['hobbies']);
    $mobile = $_POST['mobile'];

    $updateClientSql = "UPDATE client SET name='$name', email='$email', password='$password', gender='$gender', hobbies='$serializedHobbies', mobile='$mobile' WHERE id=$id";
    $result = mysqli_query($conn, $updateClientSql);

    if ($result) {
        if (!empty($_FILES["photo"]["name"])) {
            $photo = $_FILES["photo"];
            $img_name = $photo["name"];
            $img_size = $photo["size"];
            $tmp_name = $photo["tmp_name"];
            $img_error = $photo["error"];

            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $allowed_exs = array("jpg", "png", "jpeg");

            if (in_array($img_ex, $allowed_exs)) {
                $new_img_name = uniqid("IMG-", true) . '.' . $img_ex;
                $img_upload_path = 'uploads/' . $new_img_name;
                move_uploaded_file($tmp_name, $img_upload_path);

                $updatePhotoSql = "UPDATE client SET photo='$new_img_name' WHERE id=$id";
                mysqli_query($conn, $updatePhotoSql);
            }
        }

        if (!empty($_FILES["photos"]["name"][0])) {
            foreach ($_FILES['photos']['name'] as $key => $value) {
                $rand = rand(100000, 200000);
                $file = $rand . "_" . $value;
                $targetDir = 'uploads/';
                $targetPath = $targetDir . $file;

                if (move_uploaded_file($_FILES['photos']['tmp_name'][$key], $targetPath)) {
                    $insertPhotoSql = "INSERT INTO photos (user_id, photos) VALUES ('$id', '$file')";
                    if (!mysqli_query($conn, $insertPhotoSql)) {
                        echo "Failed to insert photo: " . mysqli_error($conn);
                    }
                } else {
                    echo "Error moving file $file to the server.";
                }
            }
        }

        header("Location: view.php");
        exit();
    } else {
        $error_msg = "Failed to update data.";
    }
} else {
    $id = $_GET['id'];

    $sql = "SELECT c.*, GROUP_CONCAT(p.photos) AS photos, GROUP_CONCAT(p.photo_id ) AS photo_id
        FROM client c 
        LEFT JOIN photos p ON c.id = p.user_id 
        WHERE c.id = $id 
        GROUP BY c.id";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $name = $row['name'];
        $email = $row['email'];
        $password = $row['password'];
        $gender = $row['gender'];
        $hobbies = explode(',', $row['hobbies']);
        $mobile = $row['mobile'];
        $photo = $row['photo'];
        $photoId = $row['photo_id'];
        $photoId =explode(',',$photoId);
       
              // echo "<pre>";
        // print_r($photoId);
        // echo "</pre>";
        // exit();
        $photos = explode(',', $row['photos']);
        // echo "<pre>";
        // print_r($photos);
        // echo "</pre>";
        // exit();
    } else {
        $error_msg = "Record not found.";
    }
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<h2>Edit Details</h2>
</br>
<form method="post" enctype="multipart/form-data">
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="name" id="inputEmail3" value="<?php echo $name; ?>" placeholder="Name">
      <?php if(isset($errors["name"])) {
          echo '<span class="error">' . $errors["name"] . '</span>';
      } ?>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-6">
      <input type="email" class="form-control" name="email" value="<?php echo $email; ?>" id="inputEmail3" placeholder="Email">
      <?php if(isset($errors["email"])) {
          echo '<span class="error">' . $errors["email"] . '</span>';
      } ?>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-6">
      <input type="password" name="password" value="<?php echo $password; ?>" class="form-control" id="inputPassword3" placeholder="Password">
      <?php if(isset($errors["password"])) {
          echo '<span class="error">' . $errors["password"] . '</span>';
      } ?>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Confirm Password</label>
    <div class="col-sm-6">
      <input type="password" name="confirm_password" class="form-control" id="inputPassword3" placeholder="Confirm Password">
      <?php if(isset($errors["confirm_password"])) {
          echo '<span class="error">' . $errors["confirm_password"] . '</span>';
      } ?>
    </div>
  </div>
  <div class="col-sm-6">
            <label for="formFile" class="form-label">Gender</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="maleRadio" value="Male"<?php if ($gender === 'Male') {
                    echo ' checked';
                } ?>>
                <label class="form-check-label" for="maleRadio">
                    Male
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="femaleRadio" value="Female"<?php if ($gender === 'Female') {
                    echo ' checked';
                } ?>>
                <label class="form-check-label" for="femaleRadio">
                    Female
                </label>
            </div>
        </div>

        <div class="form-group row">
    <div class="col-sm-2">Hobbies</div>
    <?php if(isset($errors["hobbies"])) {
        echo '<span class="error">' . $errors["hobbies"] . '</span>';
    } ?>
    <div class="col-sm-6">
        <div class="form-check">
            <input class="form-check-input" name="hobbies[]" type="checkbox" id="readingCheck" value="Reading"<?php if (is_array($hobbies) && in_array('Reading', $hobbies)) {
                echo ' checked';
            } ?>>
            <label class="form-check-label" for="readingCheck">
                Reading
            </label>    
        </div>
        <div class="form-check">
            <input class="form-check-input" name="hobbies[]" type="checkbox" id="writingCheck" value="Writing"<?php if (is_array($hobbies) && in_array('Writing', $hobbies)) {
                echo ' checked';
            } ?>>
            <label class="form-check-label" for="writingCheck">
                Writing
            </label>
        </div>
    </div>
</div>
</div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Mobile Number</label>
    <div class="col-sm-6">
      <input type="text" name="mobile" value="<?php echo $mobile; ?>" class="form-control" id="inputPassword3" placeholder="Mobile Number">
      <?php if(isset($errors["mobile"])) {
          echo '<span class="error">' . $errors["mobile"] . '</span>';
      } ?>
    </div>
  </div>
  <div class="col-sm-6">
    <label for="formFile" class="form-label">Profile Picture</label>
    <?php echo '<img src="uploads/' . $row['photo'] .'"style="height:100px;width:100px">';
echo '<button type="button" onclick="removeImage(' .  $row['photo'] . ')">Remove</button>';
?>
    <input class="form-control" name="photo" type="file" id="formFile">
    <?php if(isset($errors["photo"])) {
        echo '<span class="error">' . $errors["photo"] . '</span>';
    } ?>
</div>
<div class="col-sm-6">
    <label for="formFileMultiple" class="form-label">Multiple files Upload</label>
    <?php
    if (isset($photos)) {
        foreach ($photos as $index => $imageName) {
            echo '<div>';
            if (isset($photoId[$index])) {
                $photo_id = $photoId[$index];
                echo '<img src="uploads/' . $imageName . '" style="height:50px;width:50px">';
                echo '<a href="removephotos.php?id=' . $photo_id . '&main_id='.$_GET['id'].'">Remove</a>';
            }
            echo '</div>';
        }
    }
?>
    <input class="form-control" name="photos[]" type="file" id="formFileMultiple" multiple>
</div>
<div class="form-group row">
    <div class="col-sm-6">
    </br>
      <input type="submit" name="submit" class="btn btn-primary">
    <a href="view.php" class="btn btn-success">View Client</a>
    </div>
  </div>
</form>
</body>
</html>


