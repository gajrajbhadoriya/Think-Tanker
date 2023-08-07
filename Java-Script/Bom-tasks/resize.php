<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Window Open-close</title>
</head>
<body>
    <button onclick="openWindow()">Open New Window</button>
    <button onclick="resizeWindow()">Resize Window</button>
    <script>
        var myWindow;
        function openWindow(){
            myWindow = window.open("http://www.yahoobaba.net", "", "width=500,height=200px, left=200px, top=200px");
            myWindow.document.write("<p>hello this is is my new window</p>")
        }
        function resizeWindow(){
            myWindow.resizeTo(400,400);
            myWindow.focus();
        }
    </script>
</body>
</html>