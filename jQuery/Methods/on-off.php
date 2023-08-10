<!DOCTYPE html>
<html lang="en">
<head>
	<title>Learn jquery</title>
	<style>
		body{ font-family: arial; }
		#box{
			padding: 10px;
			border: 1px solid #000;
		}
		.boxbg{ background: pink; }
	</style>
</head>
<body>
	<h1>jQuery On() Methods</h1>
	<div id="box">
		<h2>Test Box</h2>
		<p>Lorem ipsum <span>dolor sit amet</span> consectetur adipisicing elit. Laborum nostrum voluptate delectus.</p>
	</div><br>
	<button>Remove Event</button>
	<!--  jquery cdn -->
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script>
		/* jQuery On Method*/
		$(document).ready(function(){
			// $('#box').on("click",function(){
			// 	$(this).css("background","orange");
			// });

			// $('#box').on("mouseover mouseout",function(){
			// 	$(this).toggleClass("boxbg");
			// });

			$('#box').on({
				"click" : function(){
					$(this).css("background","orange");
				},
				"mouseover" : function(){
					$(this).css("background","pink");
				},
				"mouseout" : function(){
					$(this).css("background","lightblue");
				}
			});

			$("button").click(function(){
				$("#box").off("mouseover mouseout")
			});
		});
	</script>
</body>
</html>