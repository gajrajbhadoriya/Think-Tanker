<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Includes</title>
    <script>
        let array = [10,20,15,22,18];
            document.write("Array Values:  " + array + "<br>");
        let c = array.filter(adultAge);
            document.write("every() if every value is match then it will give you true :  " + c + "<br>");
         //
            function adultAge(age){
                return age >= 18;
            }

        let numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

        // function to check even numbers
        function checkEven(number) {
        if (number % 2 == 0)
            return true;
        else
            return false;
        }

        // create a new array by filter even numbers from the numbers array
        let evenNumbers = numbers.filter(checkEven);
        document.write(evenNumbers);

        // Output: [ 2, 4, 6, 8, 10 ]
    </script>
</head>
<body>

</body>
</html>