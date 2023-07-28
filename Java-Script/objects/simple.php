<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        let obj = {
            name : "rahul",
            "age" : 36,
            "favMovies" : [{
                "dhoom" : [{
                    "lastname": "rahul"
                }]}, "hum", "hampty sharma ki dulania"
            ]
        }

        const {favMovies} = obj;
        const [, , dulhania] = favMovies
        console.log(dulhania)
        
       
        // const names = {
        //     firstName  : "Ronak",
        //     nickNames : ["ram"]
        // }
        // const {firstName,nickNames} = names;
        // console.log(firstName, nickNames);
        //const str = nickNames[0]
        // const [str, str2] = nickNames;
        // console.log(str, str2)

        console.log(obj.favMovies[0].dhoom[0].lastname);
        document.write(obj.name);
    </script>
</head>
<body>
    
</body>
</html>