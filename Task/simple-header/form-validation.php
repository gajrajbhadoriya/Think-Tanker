<?php

// echo "This is first page content";

if(isset($_GET["button1"])){
    header("location:home.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <input type="submit" name="button1" value="back to home">
    </form>
</body>
</html>

<?php
if(isset($_POST['btn-signup'])) {
    $uname = trim($_POST['uname']);
    $email = trim($_POST['email']);
    $upass = trim($_POST['pass']);
    $mno = trim($_POST['mno']);
    if(empty($uname)) {
        $error = "Enter your name !";
        $code = 1;
    } elseif(!ctype_alpha($uname)) {
        $error = "Please enter letters only !";
        $code = 1;
    } elseif(empty($email)) {
        $error = "enter your email !";
        $code = 2;
    } elseif(!preg_match("/^[_.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+.)+[a-zA-Z]{2,6}$/i", $email)) {
        $error = "not valid email !";
        $code = 2;
    } elseif(empty($mno)) {
        $error = "Enter Mobile NO !";
        $code = 3;
    } elseif(!is_numeric($mno)) {
        $error = "Numbers only !";
        $code = 3;
    } elseif(strlen($mno)!=10) {
        $error = "Mobile number have 10 characters only !";
        $code = 3;
    } elseif(empty($upass)) {
        $error = "enter password !";
        $code = 4;
    } elseif(strlen($upass) < 8) {
        $error = "Minimum 8 characters !";
        $code = 4;
    }
}
?>


<form method="post">
<table align="center" width="50%" border="2" bgcolor="tan ">
<?php
if(isset($error)) {
    ?>
    <tr>
    <td id="error"><?php echo $error; ?></td>
    </tr>
    <?php
}
?>
<tr>
<td><input type="text" name="uname" placeholder="User Name" value="<?php if(isset($uname)) {
    echo $uname;
} ?>"  <?php if(isset($code) && $code == 1) {
    echo "autofocus";
}  ?> /></td>
</tr>
<tr>
<td><input type="text" name="email" placeholder="Your Email"  value="<?php if(isset($email)) {
    echo $email;
} ?>" <?php if(isset($code) && $code == 2) {
    echo "autofocus";
}  ?> /></td>
</tr>
<tr>
<td><input type="text" name="mno" placeholder="Mobile No" value="<?php if(isset($mno)) {
    echo $mno;
} ?>" <?php if(isset($code) && $code == 3) {
    echo "autofocus";
}  ?> /></td>
</tr>
<tr>
<td><input type="password" name="pass" placeholder="Your Password" <?php if(isset($code) && $code == 4) {
    echo "autofocus";
}  ?> /></td>
</tr>
<tr>
<td><button type="submit" name="btn-signup">Sign Me Up</button></td>
</tr>
</table>