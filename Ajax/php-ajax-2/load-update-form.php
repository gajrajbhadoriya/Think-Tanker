<?php

$student_id = $_POST["id"];

$conn = mysqli_connect("localhost","root","","test") or die("Connection Failed");

$sql = "SELECT * FROM task WHERE id = {$student_id}";
$result = mysqli_query($conn, $sql) or die("SQL Query Failed.");

$output = '';

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      // var_dump($row["hobbies"]);
      // exit();
        $output .= "<tr>
            <td width='90px'>First Name</td>
            <td><input type='text' id='edit-fname' value='{$row["first_name"]}'>
                <input type='hidden' id='edit-id' value='{$row["id"]}'>
            </td>
        </tr>
        <tr>
            <td>Last Name</td>
            <td><input type='text' id='edit-lname' value='{$row["last_name"]}'></td>
        </tr>
        <tr>
            <td>Gender</td>
            <td>
                <input class='edit-gender' type='radio' name='gender' id='edit-gender' value='male'";
        
        if ($row['gender'] === 'male') {
            $output .= ' checked';
        }
        
        $output .= ">
                <label>Male</label>
                <input class='edit-gender' type='radio' name='gender' id='edit-gender' value='female'";
        
        if ($row['gender'] === 'female') {
           $output .= ' checked';
        }
        
        $output .= ">
                <label>Female</label>
            </td>
        </tr>
        <tr>
            <td>Country</td>
            <td>
                <select id='country' name='country'>
                    <option value='ind'"; 
        if ($row['country'] === 'ind') {
            $output .= ' selected';
        }
        $output .= ">India</option>
                    <option value='pk'";
        if ($row['country'] === 'pk') {
            $output .= ' selected';
        }
        $output .= ">Pakistan</option>
                    <option value='ban'";
        if ($row['country'] === 'ban') {
            $output .= ' selected';
        }
        $output .= ">Bangladesh</option>
                    <option value='ne'";
        if ($row['country'] === 'ne') {
            $output .= ' selected';
        }
        $output .= ">Nepal</option>
                    <option value='sl'";
        if ($row['country'] === 'sl') {
            $output .= ' selected';
        }
        $output .= ">Sri Lanka</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Hobbies</td>
            <td>
              <input class='hobbies' name='hobbies[]' type='checkbox' id='edit-hobbies' value='reading'";
                // if (is_array($row['hobbies']) && in_array('reading', $row['hobbies'])) {
                //     $output .= ' checked';
                // }
                if ($row['hobbies'] === 'reading') {
                  $output .= ' checked';
                }
                $output .= ">
              <label>Reading</label>
              <input class='hobbies' name='hobbies[]' type='checkbox' id='edit-hobbies' value='writing'";
                // if (is_array($row['hobbies']) && in_array('writing', $row['hobbies'])) {
                //     $output .= ' checked';
                // }
                if ($row['hobbies'] === 'writing') {
                  $output .= ' checked';
                }
                $output .= ">
              <label>Writing</label>
          </td>
        </tr>
        <tr>
                <td>Profile</td>
                <td><img src='uploads/{$row['photo']}' style='height:100px;width:100px'>
                <input class='form-control' name='photo' type='file' id='photo'></td>
        </tr>
        <tr>
            <td></td>
            <td><input type='submit' id='edit-submit' value='save'></td>
        </tr>";
    }
    mysqli_close($conn);

    echo $output;
}
else{
  echo "<h2>No Record Found.</h2>";
}


?>
