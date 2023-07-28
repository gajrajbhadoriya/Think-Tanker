<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>function with parameter</title>
    <script>
        function sum(java, python, php){
            let d =  java + python + php;
            return d;
        }

        function per(total){
            let per = total/300 * 100;
            document.write(per);
        }

        let total = sum(50,50,62);
        per(total);
    </script>
</head>
<body>

</body>
</html>