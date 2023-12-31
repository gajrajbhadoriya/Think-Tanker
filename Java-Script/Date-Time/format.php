<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
                // short date format "MM/DD/YYYY"
        const date = new Date("03/25/2015");
        console.log(date); // Wed Mar 25 2015 00:00:00 GMT+0545

        // long date format "MMM DD YYYY"
        const date1 = new Date("Jul 1 2020");
        console.log(date1); // Wed Jul 01 2020 00:00:00 GMT+0545

        // month and day can be in any order
        const date2 = new Date("1 Jul 2020");
        console.log(date2); // Wed Jul 01 2020 00:00:00 GMT+0545

        // month can be full or abbreviated. Also month names are insensitive.
        // comma are ignored
        const date3 = new Date("July 1 2020");
        console.log(date3); // Wed Jul 01 2020 00:00:00 GMT+0545

        const date4 = new Date("JULY, 1, 2020");
        console.log(date4); // Wed Jul 01 2020 00:00:00
    </script>
</head>
<body>
    
</body>
</html>