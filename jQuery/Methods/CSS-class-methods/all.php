<!DOCTYPE html>
<html lang="en">
<head>
	<title>Learn jquery</title>
</head>
<style>
	body{ font-family: arial; }
	#box{
		padding: 10px;
		border: 1px solid #000;
	}
	.first{ background: tan; }
	.second{ background: pink; }
</style>
<body>
	<h1>jQuery Class Methods</h1>
	<div id="box">
		<h2>Test Box</h2>
		<p>Lorem ipsum <span>dolor sit amet</span> consectetur adipisicing elit. Laborum nostrum voluptate delectus.</p>
	</div><br>
	<button id="addbutton">Add Class</button>
	<button id="removebutton">Remove Class</button>
	<button id="togglebutton">Toggle Class</button>
	<!-- jquery cdn -->
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script>
		$('#addbutton').click(function(){
            $('#box').addClass("first");
        });
        
        $('#removebutton').click(function(){
            $('#box').removeClass("first");
        });
        
        $('#togglebutton').click(function(){
            $('#box').toggleClass("second");
        });
	</script>
</body>
</html>