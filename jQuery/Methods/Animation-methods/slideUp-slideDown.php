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
	<h1>jQuery slideDown & slideUp Method</h1>
	<div id="box">
		<h2 class="test">Test Box</h2>
		<p>Lorem ipsum <span>dolor sit amet</span> consectetur adipisicing elit. Laborum nostrum voluptate delectus.</p>
	</div>
	<br>
	<button id="slideUpBtn">slideUp</button>
	<button id="slideDownBtn">slideDown</button>
	<button id="slideToggleBtn">slideToggle</button>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script>
		/* jQuery slideUp & slideDown Method*/
		$(document).ready(function(){
			$('#slideUpBtn').click(function(){
				$('#box').slideUp(3000,function(){
					console.log("Now it is Hidden")
				});
			});

			$('#slideDownBtn').click(function(){
				$('#box').slideDown(3000,function(){
					console.log("Now it is Show")
				});
			});

			$('#slideToggleBtn').click(function(){
				$('#box').slideToggle(1000,function(){
					console.log("Hey Toggle Slide")
				});
			});
		});
	</script>
</body>
</html>