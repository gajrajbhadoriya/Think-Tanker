<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <title>Client List</title>
</head>
<body>
    <div class="container">
        <h2>Client List</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Hobbies</th>
                    <th>mobile</th>
                    <th>Photo</th>
                    <!-- <th>Gellary</th> -->
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'includes/db_connection.php';
                $sql = "SELECT * FROM client";
                // $sql = "SELECT c.*, p.photos FROM client c JOIN photos p ON c.id = p.id";
                $result = mysqli_query($conn, $sql);
                // var_dump($result);
                // die();

                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <tr>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['gender']; ?></td>
                        <td><?php echo $row['hobbies']; ?></td>
                        <td><?php echo $row['mobile']; ?></td>
                        <td><?php echo '<img src="uploads/' . $row['photo'] .'"style="height:100px;width:100px">'; ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Edit</a>
                            <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this record?')">Delete</a>
                        </td>
                    </tr>
                <?php
                }
                mysqli_close($conn);
                ?>
            </tbody>
            </table>
        <a href="index.php" class="btn btn-success">Add New Client</a>
    </div>
</body>
</html>
