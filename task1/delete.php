<?php
	require_once("db.php");
	$sql="DELETE FROM `producet` WHERE `id`=2 ";
	if ($conn->query($sql) === TRUE) {
		echo "deleted";
	}
	else{
		echo "Error:". $conn->error;
	}
?>