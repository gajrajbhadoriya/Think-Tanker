<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>image upload using php</title>
    <style>
        body{
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            min-height: 100vh;
        }
    </style>
</head>
<body>
    <?php if(isset($_GET['error'])): ?>
        <p><?php echo $_GET['error']?></p>
        <?php endif ?>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="my_image"> 
        <input type="submit" name="submit" value="upload">
    </form>
</body>
</html>

SELECT e.name AS employee_name, e.gender, d.department_name
FROM employees e
JOIN departments d ON e.department_id = d.department_id;

SELECT e.*, d.department_name
FROM employees e
JOIN departments d ON e.department_id = d.department_id
WHERE e.salary BETWEEN 12000 AND 19000;

SELECT d.department_name, COUNT(*) AS number_of_employees
FROM employees e
JOIN departments d ON e.department_id = d.department_id
WHERE e.salary BETWEEN 15000 AND 19000
GROUP BY d.department_name;