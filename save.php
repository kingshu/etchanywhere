<!doctype html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js"></script>
	<script>
		$(document).ready(function() {
			window.setTimeout (function(){
				window.location = 'index.html';
			}, 3000);
		});
	</script>
</head>
<body>

	<?php
		include_once ('connector.php');
		$db = mysqlConnector();
		print_r("INSERT INTO main VALUES ('".$_REQUEST[imgStr]."','".$_REQUEST[lat]."','".$_REQUEST[lon]."', NOW())");
		$sql = "INSERT INTO main VALUES ('".$_REQUEST[imgStr]."','".$_REQUEST[lat]."','".$_REQUEST[lon]."', NOW())" ; // Auto increment   
		$statement = $db->prepare($sql);    
	    $statement->execute();
	?>
	
	<div class="button blue controls">Posted!</div>
</body>
</html>