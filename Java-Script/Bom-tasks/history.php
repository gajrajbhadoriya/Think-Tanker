<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <button onclick="backButton()">Back</button>
    <button onclick="forwordButton()">Forword</button>

    <script>
        function backButton(){
            history.back();
        }

        function forwordButton(){
            history.forward();
        }
    </script>
</body>
</html>