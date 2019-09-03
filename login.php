<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<style type="text/css">
		.log{
			border: 1px solid black;
			width: 30%;
			height: 25%;
			text-align: center;
			border-radius: 40px;
			margin-top: 200px;
			margin-left: 300px;
		}
	</style>
</head>
<body>
	<div class="log">
	<h1>Login</h1>

<form method="POST" action="" enctype="multipart/form-data">
<label>Username</label>
<input type="text" name="username">
<br><br>
<label>Password</label>
<input type="password" name="password">
<br><br>
<input type="submit" name="submit" value="Login"><br>
</form><br>
</div>
</body>
</html>


<?php
	//Make connection
	include 'conn.php';
	

	if(isset ($_POST['submit'])){
		$username=$_POST['username'];
		$password=$_POST['password'];
		$pass=md5($password);

		//select some information inside table
		$select=mysqli_query($conn,"SELECT * FROM patades WHERE username='$username' AND password='$pass'");
		$number=mysqli_num_rows($select);
			if($number>0){
				session_start();
				$userinfo=$select->fetch_assoc();
				$userid=$userinfo['id'];
				$_SESSION['id']=$userid;
				echo "<script language='Javascript'>";
		 		echo "document.location.replace('./home.php')";
		 		echo "</script>";
			}
			else{
				echo "wrong password";
			}


	}
?>