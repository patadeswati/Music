<?php
$conn=mysqli_connect('localhost','root','','music');
	if($conn){
		//echo "connected successfully";
	}
	else{
		echo $conn->error;
	}
	?>