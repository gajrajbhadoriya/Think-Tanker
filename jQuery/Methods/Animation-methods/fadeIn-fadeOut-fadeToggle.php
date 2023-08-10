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
	<h1>jQuery fadeIn & fadeOut Method</h1>
	<div id="box">
		<h2 class="test">Test Box</h2>
		<p>Lorem ipsum <span>dolor sit amet</span> consectetur adipisicing elit. Laborum nostrum voluptate delectus.</p>
	</div>
	<br>
	<button id="fadeOutBtn">fadeOut</button>
	<button id="fadeInBtn">fadeIn</button>
	<button id="fadeToggleBtn">fadeToggle</button>
	<button id="fadeToBtn">fadeTo</button>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script>
		/* jQuery fadeOut & fadeIn Method*/
		$(document).ready(function(){
			$('#fadeOutBtn').click(function(){
				$('#box').fadeOut(3000,function(){
					console.log("Now it is Hidden")
				}); 
			});

			$('#fadeInBtn').click(function(){
				$('#box').fadeIn(3000,function(){
					console.log("Now it is Show")
				});
			});

			$('#fadeToggleBtn').click(function(){
				$('#box').fadeToggle(2000,function(){
					console.log("Now it is Show");
				});
			});

			$('#fadeToBtn').click(function(){
				$('#box').fadeTo(2000,0.5,function(){
					console.log("Now it is Show");
				});
			});
		});
	</script>
</body>
</html>