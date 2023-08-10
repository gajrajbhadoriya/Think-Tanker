<!DOCTYPE html>
<html lang="en">
<head>
	<title>Learn jquery</title>
	<style>
		body{ font-family: arial; }
		h1{ font-size: 25px; }
		#box{
			border: 1px solid #6c5ce7;
			background: #a29bfe;
			padding: 10px;
		}
	</style>
</head>
<body>
	<h1>jQuery Event.target Property</h1>
	<div id="box">
		<h2>Test Box</h2>
		<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum nostrum voluptate delectus.</p>
		<button>Test Button</button>
	</div>
	<br>
	<h3></h3>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script>
		/* jQuery Event.target Property*/
		$(document).ready(function(){
			$('#box').on("click",function(){
				$('h3').html("Target Element: " + event.target.nodeName);
			});
			
			/* jQuery Event.target innerHTML Property*/
			/*$('#box').on("click",function(){
				$('h3').html("Target Element: " + event.target.innerHTML);
			});*/
		});
	</script>
</body>
</html>