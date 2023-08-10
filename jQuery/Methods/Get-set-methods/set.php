<!DOCTYPE html>
<html lang="en">
<head>
	<title>Learn jquery</title>
	<style>
		body{ font-family: arial; }
		#box{
			background: pink;
			padding: 10px;
			border: 1px solid #000;
		}

		.red{ color:red; }
	</style>
</head>
<body>
	<h1>jQuery Set Methods</h1>
	<div id="box" class="test">
		<h2>Test Box</h2>
		<p>Lorem ipsum <span>dolor sit amet</span> consectetur adipisicing elit. Laborum nostrum voluptate delectus.</p>
	</div><br>
	<button id="clickbutton">Set value</button><br><br>
	<h1>jQuery Set Method : val()</h1>
	<form action="" id="sform">
		<label for="">Name</label><input type="name" id="sname"><br><br>
		<label for="">class</label><input type="text" id="sclass"><br><br>
		<input type="submit">
	</form>
	<!-- jquery cdn -->
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script>
		$(document).ready(function(){
			$('#clickbutton').click(function(){
				$('#box h2').text("Hello ");
				//$('#box p').text("this is new text.");
				$('#box p').html("this <b>is new</b> text.");	
				$('#box h2').attr("class","red");	
			});

			/* JQuery form  Set Method Value*/
			$("#sname").val("Yahoo Baba");
			$("#sclass").val("Btech");
		});
	</script>
</body>
</html>