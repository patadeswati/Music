<!DOCTYPE html>
<html>
<body>


<?php
require'conn.php';
include 'menu.php';

$select=mysqli_query($conn,"SELECT * FROM swatip");
if ($select) {
	while ($r=mysqli_fetch_assoc($select)) {
		$id=$r['id'];
		$title=$r['title'];
		$comment=$r['comment'];
		$password=$r['image'];
		$website=$r['website'];
		$email=$r['email'];
		$datep=$r['datep'];
		$image=$r['image'];
		

		?>
		
			<?php echo $id; ?>
			<br>
			<?php echo $title; ?>
		    <br><br>
			<?php echo $comment; ?>
			<br><br>
			<?php echo $website; ?>
			<br><br>
			<?php echo $email; ?>
			<br><br>
			<?php echo $datep ?>
			<br><br>
			
			<?php echo "<img src=data:image/jpg;base64,$image width=20%>";?><br><br>
		



		<?php
	}

	
	

}else{
	echo $conn->error;
}


?>

</body>
</html>