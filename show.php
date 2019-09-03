<!DOCTYPE html>
<html>
      <title>form</title>
      <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/all.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/jquery.slim.min.js"></script>
  <style type="text/css">
    .title{
      /*margin-left: 100px;
    }
  </style>

</head>
<body>
<?php
 include 'conn.php';
 $id=$_POST['show'];
 //echo $id;
 $select=mysqli_query($conn,"SELECT * FROM swatip WHERE id='$id'");
  if ($select) {
  while ($r=mysqli_fetch_assoc($select)) {
    $id=$r['id'];
    $title=$r['title'];
    $comment=$r['comment'];
    $image=$r['image'];
    $website=$r['website'];
    $email=$r['email'];
    $datep=$r['datep'];

    $link="edit.php?id=".$id;
      $link2="delete.php?id=".$id;


   /* $link="edit.php?id=".$id;
    echo '<a href="'.$link.'">Edit</a>';
    echo"<br>";
    $link="delete.php?id=".$id;
    echo '<a href="'.$link.'">delete</a>';*/
      
  ?>
    
    
      <br><br>


<div class="container">
  <div class="row">
    <div class="col-md-4">
       <?php echo "<img src=data:image/jpg;base64,$image width='50%' height='50%'>";?><br><br>
    </div>
    <div class="col-md-8">
      <div class="title">
        <h4>Title:<?php echo $title; ?><font color="red"><?php echo"(".$id.")";?></font>
    </h4>
        <?php echo $comment; ?> <br> 
       <a href="<?php echo $website;?>"></a>
       <div>
    <span><a href="<?php echo $website;?>"><?php echo $website;?></a></span><br>
    
        <span style="float:;"><font color="green"><?php echo $datep;?></font></span>
      </div>
      <?php $link="edit.php?id=".$id;
    echo '<a href="'.$link.'">Edit ||</a>';
  
    $link="delete.php?id=".$id;
    echo '<a href="'.$link.'"> delete</a>'; ?>
    </div>
  </div>
</div>





    
    
     <?php
  }
   echo "</body>";
}else{
  echo $conn->error;
}


?>
</html>
