<!DOCTYPE html>
<html>
<head>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
<div>
    <input type="text" class="textbox1">
    <button class="switchButton">Switch</button>
    <input type="text" class="textbox2"><br><br>
</div>
<div>
    <input type="text" class="textbox1">
    <button class="switchButton">Switch</button>
    <input type="text" class="textbox2"><br><br>
</div>
<div>
    <input type="text" class="textbox1">
    <button class="switchButton">Switch</button>
    <input type="text" class="textbox2"><br><br>
</div>
    <div> <input type="text" class="textbox1">
    <button class="switchButton">Switch</button>
    <input type="text" class="textbox2"><br><br>
</div>

<script>
$(document).ready(function(){
    $('.switchButton').click(function(){
        var group = $(this).closest('div');
        var value1 = group.find('.textbox1').val();
        var value2 = group.find('.textbox2').val();
        if (value2 !== "") {
            group.find(".textbox1").val(value2);
            group.find(".textbox2").val("");
        } else {
            group.find(".textbox2").val(value1);
            group.find(".textbox1").val("");
        }
    })
    })
</script>

</body>
</html>