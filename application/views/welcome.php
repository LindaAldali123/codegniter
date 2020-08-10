<!DOCTYPE HTML>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
	<title>WelCome</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('./assests/css/bootstrap.min.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('./assests/css/font-awesome.min.css')?>">
     <link rel="stylesheet" type="text/css" href="<?php echo base_url('./assests/css/main.css')?>">
</head>
<body>
    <!-- Start Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light ">
    <div class="container">
  <a class="navbar-brand" href="#">
 <span>RESTURANT</span>
  <a href="login"> <button class="btn btn-primary" value="Login">login</button></a>&nbsp
   <a href="signup"> <button class="btn btn-primary" value="Register">Register</button></a>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-nav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="main-nav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">Home</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">About<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Work</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login">Logout</a>
      </li>

    </ul>
  </div>
  </div>
</nav>
    <!-- End Navbar -->
     <!--end navbar-->
  <!--Start Slider -->
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="<?php echo base_url('./assests/img/s1.jpg')?>" alt="First slide" width="1100" height="500">
    </div>
  </div>
</div>
<!-- End Slider -->
<div class="container">
<br>
  <h2>Data The Products</h2>
  <br>
</div>
  <div class="container">
  <div class="row dat">
   
    <?php  $i=0; 
    while($i <  $count){
      echo '<div class="lo col-lg-4 col-md-6 col-sm-12 col-xs-12">';
      echo '<img class="im" src=';echo base_url('./assests/img/lo.jpg');echo'>';
      echo '<br>';
     echo 'Name:';
     print_r($result[$i]->Name_pro);
     echo '<br>';
     echo  'Price :';
     print_r($result[$i]->Price);
     echo '<br>';
     echo 'Type :';
     print_r($result[$i]->Type);
     echo '</div>';
     $i++;
     
     }
     ?>
     
    
</div>
</div>
     <!--Start Footer-->
     <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="info">
              <h1>About us</h1>
              <p>almanar Resturant in Damascus and present 
                many servicess in aLow price We wish 
                Visit Us.
              </p>

              <p>Read more...</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="info">
              <h1>Contact Us</h1>

              <ul>
                <li><p>Send by email<br>
                ma3571318z@gmail.com</p></li>

                <li><p>facebook<br>
                  www.facebook.com</p></li>

                  <li><p>twitter<br>
                    www.twitter.com</p></li>
              </ul>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="info">
              <h1>latest news</h1>

              <ul>
                <li><p>21 october, 2019<br>
                Hello world!<br>
         </p></li>

              <li><p>21 october, 2019<br>
                Hello world!<br>
             </p></li>

              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>

<!--End Footer-->



<script type="text/javascript" src="<?php echo base_url('./assests/js/popper.min.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('./assests/js/bootstrap.min.js')?>"></script> 
<script type="text/javascript" src="<?php echo base_url('./assests/js/jquery-3.2.1.min.js')?>"></script> 
         
         
</body>
</html>