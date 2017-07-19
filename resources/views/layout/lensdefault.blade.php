<!doctype html>
<script>

        /*$(document).ready(function() { 
			var id = $(window).width();
			$.ajax({
			type:"POST",
			url:"/lens",
			data:{height:id},
			success:function(result){ 
			   alert("aaaaaa");
			}
			});
		 });*/ 
</script>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<?php   
  //echo $_POST["height"];
?>
<body style="min-width:400px">
	@include('layout.lensbar')
	@include('layout.header')
	@include('layout.lenscontent')
	@include('layout.fullproductpopup')
</body>
</html>