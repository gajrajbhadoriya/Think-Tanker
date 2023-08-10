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
			padding: 10px 10px;
		}
	</style>
</head>
<body>
	<h1>jQuery Event.preventDefault()</h1>
	<div id="box">
		<a href="http//www.yahoobaba.net" id="result">Yahoo Baba Website(preventDefault)</a>
		<br><br>
		<a href="http//www.yahoobaba.net">Yahoo Baba Website</a>
	</div>
	<br>
	<h2></h2>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script>
		/* jQuery Event.preventDefault() Method*/
		$(document).ready(function(){
			$('#result').click(function(event){
				event.preventDefault();

				// var a = event.isDefaultPrevented();
				// $('h2').html(a);
			});
		});
	</script>
</body>
</html>