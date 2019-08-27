<!DOCTYPE html>
<html>
<head>
	<title>Ajax</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
	<?php

	?>
	<form>
		<input type="" name="name" id="name">
		<input type="email" name="email" id="email">
		<button id="butsave">Save</button>
	</form>
	<div id="success">hiii</div>
</body>
</html>

<script>
$(document).ready(function() {
	$('#butsave').on('click', function() {
		//alert("ok")
		//$("#butsave").attr("disabled", "disabled");
		var name = $('#name').val();
		var email = $('#email').val();
		$.ajax({
				url: "save.php",
				type: "POST",
				data: {
					name: name,
					email: email
				},
				cache: false,
				success: function(dataResult){
					var dataResult = JSON.parse(dataResult);
					console.log(dataResult);
					if(dataResult.statusCode==200){

						alert(dataResult);
						$('#success').html('Data added successfully !'); 						
					}
					else if(dataResult.statusCode==201){
					   alert("Error occured !");
					}
					
				},
			});
	});
});
</script>