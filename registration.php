<!DOCTYPE html>
<html>
<head>
	<title>Registration page</title>
	
</head>
<body>
	
	
   
    <form method="POST" action="">
		<label>Username</label><br>
		<input type="text" name="username" placeholder="Enter username"><br><br>
		<label>Email</label><br>
		<input type="email" name="email" placeholder="enter email"><br><br>
		<label>Password</label><br>
		<input type="password" name="password" placeholder="*******"><br><br>
		<label>Confirm Password</label><br>
		<input type="password" name="password1" placeholder="*******"><br><br>
		<input type="submit" name="submit" value="submit">
    	
    </form>
  
<?php
//Make a connection
	include 'conn.php';
	//error_reporting(0);
	if(isset ($_POST['submit'])){
		//declare variables who hold data from the form fields
		$username=$_POST['username'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		$confirompassword=$_POST['password1'];
		if($password==$confirompassword){// check if password are the same
             $pass=md5($password);

		 	$insert=mysqli_query($conn,"INSERT INTO patades(username, email, password) VALUES ('$username','$email','$pass')");
		 	if($insert){// if the query has been executed
		 		 echo $pass;
		 
					 		echo"good";
					 		echo "<script language='Javascript'>";
					 		echo "document.location.replace('./login.php')";
					 		echo "</script>";
		 	            }
		 	else{
		 	      echo ("error".mysqli_error($conn));//if the query didn't worked
		 	    }
		
	}
}
else{
	//echo "password not the same";// if password are not the same
}
?>
</body>
</html>