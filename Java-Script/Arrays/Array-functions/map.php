<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>map method</title>
    <script>
        let a = [10,20,30,40];

        let b = a.map(function test(x){
            return x * 10;
        });
        document.write(b);

        // function test(x){
        //     return x * 10;
        // }
    </script>
</head>
<body>
    
</body>
</html>