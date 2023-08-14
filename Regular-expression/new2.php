<!DOCTYPE html>
<html>
<head>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

<div class="textbox-group">
    <input type="text" class="textbox">
    <button class="switchButton">Switch</button>
    <input type="text" class="textbox">
</div><br><br>

<div class="textbox-group">
    <input type="text" class="textbox">
    <button class="switchButton">Switch</button>
    <input type="text" class="textbox">
</div><br><br>

<div class="textbox-group">
    <input type="text" class="textbox">
    <button class="switchButton">Switch</button>
    <input type="text" class="textbox">
</div><br><br>

<div class="textbox-group">
    <input type="text" class="textbox">
    <button class="switchButton">Switch</button>
    <input type="text" class="textbox">
</div><br><br>

<script>
$(document).ready(function() {
    $(document).on("click", ".switchButton", function() {
        var group = $(this).closest(".textbox-group");
        var firstTextbox = group.find(".textbox").eq(0);
        var secondTextbox = group.find(".textbox").eq(2);
        
        var temp = firstTextbox.val();
        firstTextbox.val(secondTextbox.val());
        secondTextbox.val(temp);
    });
});
</script>

</body>
</html>