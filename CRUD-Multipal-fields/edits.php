<?php
include 'includes/db_connection.php';

$error_msg = "";

if (isset($_POST['submit'])) {
    $id = $_GET['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    $serializedHobbies = serialize($_POST['hobbies']);
    $mobile = $_POST['mobile'];

    $sql = "UPDATE client SET name='$name', email='$email', password='$password', gender='$gender', hobbies='$serializedHobbies', mobile='$mobile' WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: index.php");
        exit();
    } else {
        $error_msg = "Failed to update data.";
    }

    $errors = [];

    if (isset($_POST["submit"])) {
        $name = trim($_POST["name"]);
        if (empty($name)) {
            $errors["name"] = "Name is required.";
        }

        $email = trim($_POST["email"]);
        if (empty($email)) {
            $errors["email"] = "Email is required.";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors["email"] = "Invalid email format.";
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
            $photo = $_FILES["photo"];
            $img_name = $photo["name"];
            $img_size = $photo["size"];
            $tmp_name = $photo["tmp_name"];
            $img_error = $photo["error"];

            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $allowed_exs = array("jpg", "png", "jpeg");

            if (in_array($img_ex, $allowed_exs)) {
                $new_img_name = uniqid("IMG-", true). '.' . $img_ex;
                $img_upload_path = 'uploads/'. $new_img_name;
                move_uploaded_file($tmp_name, $img_upload_path);
            }
        }

        if (empty($errors)) {
            include 'includes/db_connection.php';
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $gender = isset($_POST['gender']) ? $_POST['gender'] : '';
            $hobbies = isset($_POST['hobbies']) && is_array($_POST['hobbies']) ? $_POST['hobbies'] : [];

            if (empty($hobbies)) {
                $errors["hobbies"] = "Please select at least one hobby.";
            }
            if (empty($errors)) {
                $hobbies_str = implode(', ', $hobbies);
            }
            $mobile = $_POST['mobile'];

            $updateClientSql = "UPDATE client SET name='$name', email='$email',
             password='$password', gender = '$gender', hobbies = '$hobbies',
              mobile = '$mobile'  WHERE id=$id";
            $result = mysqli_query($conn, $updateClientSql);

            if ($conn->query($updateClientSql) === true) {

                $id = $conn->insert_id;
                foreach ($_FILES['photos']['name'] as $key => $value) {
                    $rand = rand(100000, 200000);
                    $file = $rand . "_" . $value;
                    $targetDir = 'uploads/';
                    $targetPath = $targetDir . $file;

                    if (move_uploaded_file($_FILES['photos']['tmp_name'][$key], $targetPath)) {

                        $insertPhotoSql = "UPDATE INTO photos (id, photos) VALUES ('$id', '$file')";
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
                echo "Error: " . $updateClientSql . "<br>" . $mysqli->error;
            }

            if ($result) {
                mysqli_close($conn);
                header("Location: view.php");
                die();
            }
        }
    }
} else {
    $id = $_GET['id'];
    // $sql = "SELECT * FROM client WHERE id=$id";
    $sql = "SELECT c.*, p.photos FROM client c JOIN photos p ON c.id = p.id WHERE c.id=$id";

    $result = mysqli_query($conn, $sql);
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $name = $row['name'];
        $email = $row['email'];
        $password = $row['password'];
        $gender = $row['gender'];
        // $hobbies = $row['hobbies'];
        $hobbies = isset($row['hobbies']) && is_array($row['hobbies']) ? $row['hobbies'] : [];  
        $mobile = $row['mobile'];
        $imageNames = explode(',', $row['photos']);
        // echo "<pre>";
        // print_r($imageNames[0],$imageNames[1]);
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
        <input class="form-check-input" name="hobbies[]" type="checkbox" id="readingCheck" value="Reading"<?php if (in_array('Reading', $hobbies)) echo ' checked'; ?>>
        <label class="form-check-label" for="readingCheck">
            Reading
        </label>    
    </div>
    <div class="form-check">
        <input class="form-check-input" name="hobbies[]" type="checkbox" id="writingCheck" value="Writing"<?php if (in_array('Writing', $hobbies)) echo ' checked'; ?>>
        <label class="form-check-label" for="writingCheck">
            Writing
        </label>
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
    <?php echo '<img src="uploads/' . $row['photo'] .'"style="height:100px;width:100px">'; ?>
    <input class="form-control" name="photo" type="file" id="formFile">
    <?php if(isset($errors["photo"])) {
        echo '<span class="error">' . $errors["photo"] . '</span>';
    } ?>
</div>
<div class="col-sm-6">
    <label for="formFileMultiple" class="form-label">Multiple files Upload</label>
    <?php
    if (isset($imageNames) && is_array($imageNames)) {
        foreach ($imageNames as $imageName) {
            echo '<img src="uploads/' . $imageName . '" style="height:50px;width:50px">';
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

<?php if ($error_msg) { ?>
    <p><?php echo $error_msg; ?></p>
<?php } ?>           

<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $id = $_POST['id'];
    $sqlFetchPhotos = "SELECT photos FROM photos WHERE id = " . $id;
    $resultFetchPhotos = mysqli_query($conn, $sqlFetchPhotos);

    if ($resultFetchPhotos) {
        $imageNames = [];
        while ($row = mysqli_fetch_assoc($resultFetchPhotos)) {
            $imageNames[] = $row['photos'];
        }
        $sqlDeleteClient = "DELETE FROM client WHERE id = " . $id;
        $resultDeleteClient = mysqli_query($conn, $sqlDeleteClient);

        if ($resultDeleteClient) {
            $sqlDeletePhotos = "DELETE FROM photos WHERE id = " . $id;
            $resultDeletePhotos = mysqli_query($conn, $sqlDeletePhotos);

            if ($resultDeletePhotos) {
                foreach ($imageNames as $imageName) {
                    $imageFilePath = 'uploads/' . $imageName;
                    if (file_exists($imageFilePath)) {
                        unlink($imageFilePath);
                    }
                }

                echo json_encode(['success' => true]);
            } else {
                echo json_encode(['success' => false, 'message' => 'Image deletion failed.']);
            }
        } else {
            echo json_encode(['success' => false, 'message' => 'Client record deletion failed.']);
        }           
    } else {
        echo json_encode(['success' => false, 'message' => 'Failed to fetch image names.']);
    }
}
?>
