<?php
$errors = [];

if (isset($_POST["submit"])) {
    $name  = trim($_POST["name"]);
    if (empty($name)) {
        $errors["name"] = "Name is required.";
    } elseif(!preg_match("/^([a-zA-Z' ]+)$/", $name)) {
        $errors["name"]     = 'INVALID';
    }


    $email = trim($_POST["email"]);
    $pattern = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';
    if (empty($email)) {
        $errors["email"] = "Email is required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors["email"] = "Invalid email address!";
    }


    $password = trim($_POST["password"]);
    if (empty($password)) {
        $errors["password"] = "Password is required.";
    }


    $confirm_password = trim($_POST["confirm_password"]);
    if (empty($confirm_password)) {
        $errors["confirm_password"] = "Confirm Password is required.";
    } elseif ($password !== $confirm_password) {
        $errors["confirm_password"] = "Passwords do not match.";
    }


    $gender = trim($_POST["gender"]);
    if (empty($gender)) {
        $errors["gender"] = "Password is required.";
    }


    $mobile = trim($_POST["mobile"]);
    if (empty($mobile) || !preg_match("/^[0-9]{10}$/", $mobile)) {
        $errors["mobile"] = "Invalid mobile number. Please enter a 10-digit number.";
    }


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


    if (empty($errors)) {
        include 'includes/db_connection.php';
        $name       = $_POST['name'];
        $email      = $_POST['email'];
        $password   = $_POST['password'];
        $gender     = isset($_POST['gender']) ? $_POST['gender'] : '';
        $hobbies    = isset($_POST['hobbies']) && is_array($_POST['hobbies']) ? $_POST['hobbies'] : [];

        if (empty($hobbies)) {
            $errors["hobbies"] = "Please select at least one hobby.";
        }
        if (empty($errors)) {
            $hobbies_str = implode(', ', $hobbies);
        }
        $mobile     = $_POST['mobile'];

        $insertClientSql = "INSERT INTO client (name, email, password, gender, hobbies, mobile, photo) 
                VALUES ('$name', '$email', '$password', '$gender', '$hobbies_str', '$mobile', '$new_img_name')";
        $result     = mysqli_query($conn, $insertClientSql);

        if ($conn->query($insertClientSql) === true) {

            $id = $conn->insert_id;
            foreach ($_FILES['photos']['name'] as $key => $value) {
                $rand       = rand(100000, 200000);
                $file       = $rand . "_" . $value;
                $targetDir  = 'uploads/';
                $targetPath = $targetDir . $file;

                if (move_uploaded_file($_FILES['photos']['tmp_name'][$key], $targetPath)) {

                    $insertPhotoSql = "INSERT INTO photos (photos, user_id) VALUES ('$file', '$id')";
                    if ($conn->query($insertPhotoSql) === true) {
                        echo "data inserted successfully";
                    } else {
                        echo "data not insert try again";
                    }
                } else {
                    echo "Error moving file $file to the server.";
                }
            }
        } else {
            echo "Error: " . $insertClientSql . "<br>" . $mysqli->error;
        }

        if ($result) {
            mysqli_close($conn);
            header("Location: view.php");
            die();
        }
    }
}
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
<h2>Add Clients</h2>
</br>
<form method="post" enctype="multipart/form-data">
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="name" id="inputEmail3" placeholder="Name">
      <?php if(isset($errors["name"])) {
          echo '<span class="error">' . $errors["name"] . '</span>';
      } ?>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-6">
      <input type="email" class="form-control" name="email" id="inputEmail3" placeholder="Email">
      <?php if(isset($errors["email"])) {
          echo '<span class="error">' . $errors["email"] . '</span>';
      } ?>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-6">
      <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
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
  <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
      <?php if(isset($errors["gender"])) {
          echo '<span class="error">' . $errors["gender"] . '</span>';
      } ?>
      <div class="form-check">
    <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault1" value="Male">
    <label class="form-check-label" for="flexRadioDefault1">
        Male
    </label>
</div>  
<div class="form-check">
    <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault2" value="Female" checked>
    <label class="form-check-label" for="flexRadioDefault2">
        Female
    </label>
</div>

    </div>
  </fieldset>
  <div class="form-group row">
    <div class="col-sm-2">Hobbies</div>
    <?php if(isset($errors["hobbies"])) {
        echo '<span class="error">' . $errors["hobbies"] . '</span>';
    } ?>
    <div class="col-sm-6">
        <div class="form-check">
            <input class="form-check-input" name="hobbies[]" type="checkbox" id="readingCheck" value="Reading">
            <label class="form-check-label" for="readingCheck">
                Reading
            </label>    
        </div>
        <div class="form-check">
            <input class="form-check-input" name="hobbies[]" type="checkbox" id="writingCheck" value="Writing">
            <label class="form-check-label" for="writingCheck">
                Writing
            </label>
        </div>
    </div>
</div>

  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Mobile Number</label>
    <div class="col-sm-6">
      <input type="text" name="mobile" class="form-control" id="inputPassword3" placeholder="Mobile Number">
      <?php if(isset($errors["mobile"])) {
          echo '<span class="error">' . $errors["mobile"] . '</span>';
      } ?>
    </div>
  </div>
  <div class="col-sm-6">
    <label for="formFile" class="form-label">Profile Picture</label>
    <input class="form-control" name="photo" type="file" id="formFile">
    <?php if(isset($errors["photo"])) {
        echo '<span class="error">' . $errors["photo"] . '</span>';
    } ?>
</div>
 <div class="col-sm-6">
    <label for="formFileMultiple" class="form-label">Multiple files Upload</label>
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