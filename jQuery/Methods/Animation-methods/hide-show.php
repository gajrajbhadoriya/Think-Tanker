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
	<h1>jQuery hide & show Method</h1>
	<div id="box">
		<h2 class="test">Test Box</h2>
		<p>Lorem ipsum <span>dolor sit amet</span> consectetur adipisicing elit. Laborum nostrum voluptate delectus.</p>
	</div>
	<br>
	<button id="hideBtn">Hide</button>
	<button id="showBtn">Show</button>
	<button id="toggleBtn">Toggle</button>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script>
		/* jQuery hide & show Method*/
		$(document).ready(function(){
			$('#hideBtn').click(function(){
				$('#box').hide(3000,function(){
					console.log("Now it is hidden")
				});
			});

			$('#showBtn').click(function(){
				$('#box').show(3000,function(){
					console.log("Now it is show")
				});
			});

			$('#toggleBtn').click(function(){
				$('#box').toggle(1000,function(){
					console.log("Hey Toggle");
				});
			});
		});
	</script>
</body>
</html>