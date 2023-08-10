<!DOCTYPE html>
<html lang="en">
<head>
	<title>Learn jquery</title>
	<style>
		body{ font-family: arial; }
		h1{ font-size: 25px; }
		#box{
			background: lightgreen;
			padding: 10px;
			border: 1px solid #000;
		}
	</style>
</head>
<body>
	<h1>jQuery Method Chaining</h1>
	<div id="box">
		<h2>Test Box</h2>
		<p>Lorem ipsum <span>dolor sit amet</span> consectetur adipisicing elit. Laborum nostrum voluptate delectus.</p>
	</div>
	<br>
	<button id="animateBtn">Animate</button>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script>
		/* jQuery Method Chaining*/
		$(document).ready(function(){
			$('#animateBtn').click(function(){
				$('#box').css('background','pink').slideUp(2000).slideDown(2000);
			});
		});
	</script>
</body>
</html>