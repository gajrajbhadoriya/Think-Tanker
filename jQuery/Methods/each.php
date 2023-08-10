<html lang="en">
<head>
	<title>Learn jquery</title>
	<style>
		body{ font-family: arial; }
		h1{ font-size: 25px; }
	</style>
</head>
<body>
	<h1>jQuery each() Method</h1>
	<ul>
		<li>Orange</li>
		<li>Apple</li>
		<li>Banana</li>
		<li>Grapes</li>
	</ul>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script>
		/* jQuery each() Method*/
		$(document).ready(function(){
			$('li').each(function(){
				console.log($(this).text());
				//$(this).text("Hello");
			});
		});
	</script>
</body>
</html>