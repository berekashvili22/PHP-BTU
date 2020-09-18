<!-- UPDATE `users` SET `id`=[value-1],`name`=[value-2],`password`=[value-3] WHERE `id`=2 -->

<?php
	require_once("db.php");
	$sql="UPDATE `product` SET 
                 `product_name`='iphone x' WHERE `id`=3 ";
	if ($conn->query($sql) === TRUE) {
		echo "updated";
	}
	else{
		echo "Error:". $conn->error;
	}
?>