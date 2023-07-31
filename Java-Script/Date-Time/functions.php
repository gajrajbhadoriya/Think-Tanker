<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
       const timeInMilliseconds = Date.now();
        console.log(timeInMilliseconds); // 1593765214488

        const time = new Date;

        // get day of the month
        const date = time.getDate();
        console.log(date); // 30

        // get day of the week
        const year = time.getFullYear();
        console.log(year); // 2020

        const utcDate = time.getUTCDate();
        console.log(utcDate); // 30

        const event = new Date('Feb 19, 2020 23:15:30');
        // set the date
        event.setDate(15);
        console.log(event.getDate()); // 15

        // Only 28 days in February!
        event.setDate(35);

        console.log(event.getDate()); // 7
    </script>
</head>
<body>
    
</body>
</html>