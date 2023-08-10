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
</style>
<body>
	<h1>jQuery CSS Methods</h1>
	<div id="box">
		<h2>Test Box</h2>
		<p>Lorem ipsum <span>dolor sit amet</span> consectetur adipisicing elit. Laborum nostrum voluptate delectus.</p>
	</div><br>
	<button id="stylebutton">Add Style</button>
	<!-- jquery cdn -->
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script>
		/* jQuery CSS Method*/
		$(document).ready(function(){
			/*$('#stylebutton').click(function(){
				$('#box').css("background","pink");
			});*/

			$('#stylebutton').click(function(){
				$('#box').css({"background":"pink","color":"red","border":"5px dotted green"});
			});
		});
	</script>
</body>
</html>