<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        var str = "JavaScript is the world's most misunderstood programming language.";

            // indexOf() returns the first occurance
            var index1 = str.indexOf("language");
            console.log(index1); // 57

            var index2 = str.indexOf("p");
            console.log(index2); // 8

            // second argument specifies the search's start index
            var index3 = str.indexOf("p", 9);
            console.log(index3); // 45

            // indexOf returns -1 if not found
            var index4 = str.indexOf("Python");
            console.log(index4); // -1
    </script>
</head>
<body>
    
</body>
</html>