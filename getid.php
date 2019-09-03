<!DOCTYPE html>
<html>
      <title>form</title>
      <style type="text/css">
        .show1{
          border: 1px solid black;
          height: 100px;
          width: 300px;
          text-align: center;
          margin-left: 500px;
          margin-top: 100px;
        }
      </style>
      <head>
      <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/all.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/jquery.slim.min.js"></script>

</head>
<body>
<body>
  <div class="show1">
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            
            <form class="form-signin" method = "POST" action = "show.php">
              <div class="form-label-group"><br>
          
                <input type="text" name = "show" class="form-control" placeholder="Your code here" required autofocus><BR><br>
             

           
        
              <button class="btn btn-lg btn-success btn-block text-uppercase" type="submit" name = "submit" value ="submit">SHOW POST</button>
          </div>
              
              <!--hr class="my-4"-->
             

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  <?php

?>
</body>

<p id = "result"></p>




</body>
</html>
