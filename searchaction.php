<?php 
$History = empty($_GET['History']) ? "" : $_GET['History'];
if(empty($History)){
	$searchlist = getAllResults();
}
else {
	$searchlist=getAllResults();
	}
	?>
	if(count($History)>0){
		echo"<table>";
		echo"<tr>";
		echo"<th> History</th>";
		echo"<th>Rate</th>";
		echo"</tr>";

	}