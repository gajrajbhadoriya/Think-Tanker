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
		#box2{ 
			background: pink;
			padding: 10px;
			border: 1px solid #000;
		}
	</style>
</head>
<body>
	<h1>jQuery Clone() Method</h1>
	<div id="box">
		<h2>Test Box</h2>
		<p>Lorem ipsum <span>dolor sit amet</span> consectetur adipisicing elit. Laborum nostrum voluptate delectus.</p>
	</div>
	<br>
	<div id="box2">
		<p>This is another DIV.</p>
	</div><br>
	<button id="cloneBtn">Clone</button>
	<!-- jquery cdn -->
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script>
		/* jQuery Clone() Method*/
		$(document).ready(function(){
			$('#cloneBtn').click(function(){
				$('#box h2').clone().prependTo("#box2");
				$('#box p').clone().appendTo("#box2");
			});

            // $(document).ready(function(){
            //     $('#cloneBtn').click(function(){
            //         $('#box h2').clone().prependTo('#box2');
            //         $('#box p').clone().appendTo('#box2');
            //     })
            // })
		});
	</script>
</body>
</html>
