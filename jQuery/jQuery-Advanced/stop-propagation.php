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
	<h1>jQuery Event.stopPropagation()</h1>
	<div id="box">
		<h2>Test Box</h2>
		<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum nostrum voluptate delectus.</p>
		<button>Test Button</button>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script>
		/* jQuery Event.stopPropagation() Property*/
		$(document).ready(function(){
			$('#box').click (function(){
				alert("The div element was Clicked");
			});

			$('h2').click (function(){
				alert("The h2 element was Clicked");
			});

			$('p').click (function(event){
				event.stopPropagation();
				alert("The p element was Clicked" + " : " + event.isPropagationStopped());
			});

			$('button').click (function(){
				alert("The button element was Clicked");
			});
		
		});
	</script>
</body>
</html>