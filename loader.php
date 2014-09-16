<div>
<?php
	include_once ('connector.php');
	$db = mysqlConnector();
//	print_r("SELECT imgURI FROM main WHERE lat BETWEEN ".($_REQUEST[lat]-0.000139)." AND ".($_REQUEST[lat]+0.000139)." AND lon BETWEEN ".($_REQUEST[lon]-0.000139)." AND ".($_REQUEST[lon]+0.000139)." ORDER BY datetime DESC LIMIT 50" );   
	$sql = "SELECT imgURI FROM main WHERE lat BETWEEN ".($_REQUEST[lat]-1.0005)." AND ".($_REQUEST[lat]+1.0005)." AND lon BETWEEN ".($_REQUEST[lon]-1.0005)." AND ".($_REQUEST[lon]+1.0005)." ORDER BY datetime DESC LIMIT 50" ; 
	$statement = $db->prepare($sql);   
	$statement->execute();
	$result = $statement->fetchAll();

	if (count($result)==0) {
		echo "Sorry, there are no etches in this area";
	}
	else {
		foreach ($result as $res) {
			echo "<img class='wallimages' src=".$res[imgURI].">&emsp;";
		}
	}
?>

</div>