<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Test</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<style>
	
	 .IMG{ 
                float:center; 
               
                font-size: 15px;
                margin-top: 70px;
                
            } 
            .slog{ 
                float:center;  
                margin-top: 70px;
                 padding: 1%;
                 font-size: 150%;

               
            } 
            .mail{ 
                float:center;
                margin-top: 70px;
                padding: 1%;
                font-size: 150%;
                
            } 
            .con{ float:center;  
                margin-top: 70px;
               
                font-size: 150%;
                padding: 1%;
                margin-left: 40px;
              }
              * {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}
*{
box-sizing:border-box;
}

            
              .log{
                margin-left: 120px;
                font-size: 20px;
                color: black;
              }

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
</head>
	
</style>
</head>


<body>

<div class="container" style="background-color: #FFF8DC; width: 100%" >
    <div class="row">
      <div class="col-sm-2">
        <img src="images/logo.png" class="pic">
      </div>
      <div class="col-sm-4">
        <p class="slogan"><i class="fa fa-heart" aria-hidden="true"></i> Hear it. See it. Live it.<i class="fa fa-heart" aria-hidden="true"></i></p>
      </div>
      <div class="col-sm-3">
        <p class="email">Email:music@gmail.com</p>
      </div>
      <div class="col-sm-3">
          <p class="tel">Telephone: 9325672283</p>
        </div>
    </div>
  </div>

<!-- Slide Show -->





<div class="slide">
  <div class="w3-content w3-section" style="max-width:500px">
  <img class="mySlides" src="images/m3.jpeg" height="400px;" width="1299px">
  <img class="mySlides" src="images/m1.jpg" height="400px;" width="1299px">
  <img class="mySlides" src="images/m2.jpg" height="400px;" width="1299px">
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script><br><br>


<!-- Band Description -->



<?php
   include 'conn.php';

//select all

	$perpage = 6;
          if(isset($_GET["page"])){
          $page = intval($_GET["page"]);
          }else {
          $page = 1;
          }
          $calc = $perpage * $page;
          $start = $calc - $perpage;
          $result = mysqli_query($conn, "SELECT * FROM swatip ORDER BY id DESC  Limit $start, $perpage");
          $rows = mysqli_num_rows($result);

          if($rows){
          $i = 0;
        while($your_post = mysqli_fetch_assoc($result)) {
    	$id=$your_post['id'];
    	$title=$your_post['title'];
    	$comment=$your_post['comment'];
    	$image=$your_post['image'];
    	$website=$your_post['website'];
    	$email=$your_post['email'];
        $datep= date('y-m-d');
    	$link="index.php?id=".$id;
?>
   <div class="row">
       <div class="col-md-4" style="margin-bottom: 6%">
       <div class="gallery-box">
      <div class="gallery-img">
    <?php echo "<img src=data:image/jpg;base64,$image width='70%' style='max-height:150px;'>";?>
      </div>
       </div>
    </div>
      <div class="col-md-7">
        <div class="gallery-details">
          <h4>Title:<?php echo $title; ?><font color="red"><?php echo"(".$id.")";?></font>
          </h4>
            <div>
              <?php echo $comment; ?>
            </div>
            <a href="<?php echo $website;?>"></a>
            <div>
              <span><a href="<?php echo $website;?>"><?php echo $website;?></a></span><br>
              <span style="margin-left: 430px;"><font color="green"><?php echo $datep;?></font></span>
            </div>
         </div>   
               </div>
           </div>
        <?php

    }
   
      }else{
              echo "<center>";
              echo "<font color = 'red'>";
              echo "NO POST YET !";
              echo "</font>";
              echo "</center>";
          }
	?>
    <br><br>
    

</div>
<center>
<?php
//page number footer
echo "<br><br><br>";
    if(isset($page)){
    $result = mysqli_query($conn,"select Count(*) As Total from swatip");
    $rows = mysqli_num_rows($result);
    if($rows){
    $rs = mysqli_fetch_assoc($result);
    $total = $rs["Total"];
    }
    echo "<div class='pagenation'>";
    $totalPages = ceil($total / $perpage);
    if($page <=1 ){
    //echo "<span id='page_links' style='font-weight: bold;'>&laquo;</span>";
    }else{
    $j = $page - 1;
    echo "<a href='index.php?page=$j'>&laquo;</a>";
    }
    for($i=1; $i <= $totalPages; $i++){
    if($i<>$page){
      echo "<a href='index.php?page=$i'>$i</a>";
    }
    else
    {
      echo "<a href='index.php?page=$i' class='active'>$i</a>";
    }
  }
  if($page == $totalPages )
  {
//echo "<span id='page_links' style='font-weight: bold;'>&raquo;</span>";
  }else{
    $j = $page + 1;
    echo "<a href='index.php?page=$j'>&raquo;</a>";
    }
    echo "</div>";
    }
    ?>


</body>
</html>
