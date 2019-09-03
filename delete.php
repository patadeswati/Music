





<?php
session_start();//get the session
 if(isset($_GET['id'])){//check if we get id from a get
 	$id=$_GET['id'];//put the id of selected post in a variable
 	if(isset($_SESSION['id'])){//check if session exsist
		include 'conn.php';
		//make a connection to the database
	if(!$conn){//if there is no cannection 
		echo "connection failed";
	}
}else{//if there is no session
	echo "<script language='Javascript'>";
		 		echo "document.location.replace('./login.php')";//go to login page
		 		echo "</script>";
  }
  	$delete=mysqli_query($conn,"DELETE FROM swatip where id='$id'");//delete post with the get id
  	echo "<script language='Javascript'>";
		 		echo "document.location.replace('./home.php')";//go to user page
		 		echo "</script>";

 }
?>