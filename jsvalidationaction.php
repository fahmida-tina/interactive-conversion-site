<?php
if($_SERVER['REQUEST_METHOD']==="POST"){
	If(empty($_POST['Rate']['History']['Search'])){
		echo "Field Empty";
	}
	else{
		echo "<h1>Welcome, " . $_POST['Rate']['History']['Search'] . "</h1>";
	}
}
?>