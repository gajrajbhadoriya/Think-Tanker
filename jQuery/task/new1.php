<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div>
		
			<input type="text" name="" class="i1" id="t1">
			<button class="btn" id="1">CLICK</button>
			<input type="text" name="" class="i2" id="a1">

	
	</div>
	<div>
		
			<input type="text" name="" class="i1" id="t2">
			<button class="btn" id="2">CLICK</button>
			<input type="text" name="" class="a2" id="a2">

	
	</div>
	<div>
			<input type="text" name="" class="i" id="t3">
			<button class="btn" id="3">CLICK</button>
			<input type="text" name="" class="i" id="a3">
	</div>
	

</body>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="js/jquery.js"></script>
	
			<script>
					$(".btn").on('click',function(){
					var id = $(this).attr('id');
					$('#t'+id).blur(function()
					{
						$('#a'+id).val($('#t'+id).val());
					});
					$('#a'+id).blur(function()
					{
						$('#t'+id).val($('#a'+id).val());
					});
    			});
	
	</script>
</html>