<!DOCTYPE html>
<html lang="en">
<head>
	<title>Learn jquery</title>
	<style>
		body{ font-family: arial; }
		h1{ font-size: 25px; }
		#box{
			background: lightgreen;
			width: 100px;
			height: 100px;
			padding: 10px;
			border: 1px solid #000;
			position:relative;
		}
	</style>
</head>
<body>
	<h1>jQuery Animate Method</h1>
	<div id="box">My web site</div>
	<br>
	<button id="animateBtn">Animate</button>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script>
		/* jQuery Animate Method*/
		$(document).ready(function(){
			$('#animateBtn').click(function(){
				$('#box').animate({	left: '150px',fontSize: '25px'},3000,function(){
					console.log("First Animate Completed;z")
				});
				$('#box').animate({	top: '150px'});
				$('#box').animate({	width: '250px'});
			});
		});
	</script>
</body>
</html>