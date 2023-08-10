<!DOCTYPE html>
<html lang="en">
<head>
	<title>Learn jquery</title>
	<style>
		body{ font-family: arial; }

		#box{
			border:1px solid #000;
			background: pink;
			padding: 10px 10px;
		}
		
	</style>
</head>
<body>
	<h1> *jquery Mouse Events*</h1>
	<div id="box" class="test">
		<h2>Test Box</h2>
		<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Earum sint, culpa suscipit sapiente, veritatis debitis quis atque laboriosam commodi voluptate non architecto.</p>
	</div>
    <div>
		<h3>Please click the box and check output</h3>
        <h3>please double click on the box and get output</h3>
        <h3>please right click on the box and get output</h3>
	</div>
	<!-- jquery cdn -->
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script>
		/* jquery click Event*/
		$(document).ready(function(){
			$('#box').click(function(){
				$('#box').css('background-color','green');
				//var a = $('#box').html();
				//console.log(a);
			});
		});

		/* jquery dblclick Event*/
		$('#box').dblclick(function(){
			$('#box').css('background-color','orange');
		});


		/* jquery contextmenu Event*/
		$('#box').contextmenu(function(){
			$('#box').css('background-color','blue');
		});

		/* jquery mouseenter Event*/
		$('#box').mouseenter(function(){
			$('#box').css('background-color','tan');
		});
		
		/* jquery mouseleave Event*/
		$('#box').mouseleave(function(){
			$('#box').css('background-color','purple');
		});
	</script>
</body>
</html>