<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Publish Post</title>
	<style type="text/css">
		.publish{
			border: 1px solid black;
			border-radius: 30px;
			width: 300px;
			height: 400px;
			text-align: center;
			margin-left: 400px;
			margin-top: 50px;
		}
	</style>
</head>
<body>
<?php
include 'menu.php';
?>
<div class="publish">
<form method="POST" action="" enctype="multipart/form-data"><br>
	<label>Title</label><br>
	<input type="text" name="title"><br><br>

	<label>Comment</label><br>
	<textarea name="comment"></textarea><br><br>

	<label>Image</label><br>
	<input type="file" name="image"><br><br>

	<label>Website</label><br>
	<input type="url" name="website"><br><br>

	<label>Contact/Email</label><br>
	<input type="text" name="email"><br><br>

	<input type="submit" name="publish" value="publish">

</form>
</div>

<?php 
require 'conn.php';


if(isset ($_POST['publish'])){
		$title=addslashes($_POST['title']);
		$comment=addslashes($_POST['comment']);
		$website=addslashes($_POST['website']);
		$email=addslashes($_POST['email']);
	    $datep= date('y-m-d');
		
		$imagepath=$_FILES['image']['tmp_name'];
		 echo "title : ".$title;
		 echo "<br>";
		 echo "comment : ".$comment;
		 echo "<br>";
		 echo "image : ".$imagepath;
		 echo "<br>";
		 echo "website : ".$website;
		 echo "<br>";
		  echo "email : ".$email;
		 echo "<br>";
		 echo "datep : ".$datep;
		 echo "<br>";
		 
		 if($imagepath){

		 	$binary =fread(fopen($imagepath, 'r'),filesize($imagepath));
		 	$image =base64_encode($binary);

		 	
		 	
		 	$insert=mysqli_query($conn,"INSERT INTO swatip(title, comment, image, website, email,datep) VALUES ('$title','$comment','$image','$website','$email','$datep')");
		 	if($insert){
		 		echo"good";
		 		echo "<script language='Javascript'>";
		 		echo "document.location.replace('./home.php')";
		 		echo "</script>";


		 	}
		 	else{
		 		echo ("error".mysqli_error($conn));
		 	}

		 }
		 else{
		 	echo "choose your image";
		 }




	
}




?>
</body>
</html>