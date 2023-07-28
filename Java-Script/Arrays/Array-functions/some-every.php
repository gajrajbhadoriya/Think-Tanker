<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Includes</title>
    <script>
        let array = [10,20,15,22,18];
            document.write("Array Values:  " + array + "<br>");
        let b = array.some(adultAge);
            document.write("some() check if any of the element in an array pass a last :  " + b + "<br>");
        let c = array.every(adultAge);
            document.write("every() if every value is match then it will give you true :  " + c + "<br>");

            function adultAge(age){
                return age >= 18;
            }
    </script>
</head>
<body>

</body>
</html>