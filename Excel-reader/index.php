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
    <form action="code.php" method="post">
        <div class="raw">
            <div class="col-md-6">
                <select name="export_file_type" class="form-control" required>
                    <option value="">--Select-any-one--</option>
                    <option value="xlsx">xlsx</option>
                    <option value="xls">xls</option>
                    <option value="csv">csv</option>
                </select>
            </div>
            <div class="col-md-6">
                <button type="submit" name="export-btn" class="btn btn-primary">Export</button>
            </div>
        </div>
    </form>
</body>
</html>