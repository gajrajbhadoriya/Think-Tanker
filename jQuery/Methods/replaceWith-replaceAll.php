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
	<h1>jQuery ReplaceWith() & ReplaceAll()</h1>
	<div id="box">
		<h2>Test Box</h2>
		<p>Lorem ipsum <span>dolor sit amet</span> consectetur adipisicing elit. Laborum nostrum voluptate delectus.</p>
		<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum nostrum voluptate delectus.</p>
		<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum nostrum voluptate delectus.</p>
	</div>
	<br>
	<button id="replaceBtn">Replace</button>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script>
		/* jQuery  ReplaceWith() & ReplaceAll*/
		$(document).ready(function(){
			$('#replaceBtn').click(function(){
				$('#box p:first').replaceWith("<h3>Replaces successfully</h3>");

				//$("<h3>Yahoo Baba</h3>").replaceAll("#box p:first");
			});
		});
	</script>
</body>
</html>
<script>
    $(document).ready(function(){
        $('#replaceBtm'),click(function(){
            document.write("hello world");
        })
    })
</script>