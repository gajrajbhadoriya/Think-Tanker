<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
	<h1>jQuery Stop Method</h1>
	<div id="box">Yahoo Baba</div>
	<br>
	<button id="animateBtn">Animate</button>
	<button id="stopBtn">Stop</button>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script>
		/* jQuery Stop Method*/
		$(document).ready(function(){
			$('#animateBtn').click(function(){
				$('#box').animate({	left: '200px'},3000);
				$('#box').animate({	fontSize: '25px'},2000);
			});

			$('#stopBtn').click(function(){
				$('#box').stop(true,true);
			});
		});
	</script>
</body>
</html>