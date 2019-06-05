
<?php session_start();
include 'navbar.php'?>

<div class="jumbotron">
  <h1 class="display-4">SKS Medical Inc</h1>
  <p class="lead">SKS Medical is pioneer in the field of selected Medical equipments and exporting in 32 countries since last five years.SKS is having a trend of mantaining relations with our esteemed customers and even with our competitors. SKS would like to commit for quality products at reasonable price,so before you select any one else rest then us,please compare us in prices and quality.SKS would like to assure you that no one is capable of giving you best rate then us because we dont believe in making quick bucks,we are here for the long run along with you.Is simple enough and its called care.</p>
  <hr class="my-4">
  <p>To know more about us click the button given below.</p>
  <a class="btn btn-primary btn-lg" href="about.php" role="button" target="_blank">Know more</a>
</div>


<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Hello Everyone!<br>Welcome to our website</strong> You should check out our products shown below.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>








<div id="carouselExampleIndicators" class="carousel slide w-75 mx-auto" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="icu.jpg" alt="First slide" style="height: 500px">
     </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="fowler.jpg" alt="Second slide" style="height: 500px">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 " src="op.png" alt="Third slide" style="height: 500px">
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>



<div>
  <div >
    <h5 class="card-title">Interested in medical equipments?</h5>
    <p class="card-text">Go through our product catalogue</p>
    <a href="cat.php" class="btn btn-primary">Catalogue</a>
  </div>
</div>

<div>
  <div >
    <h5 class="card-title">Want to join us?</h5>
    <p class="card-text">Click here to register</p>
    <a href="login.php" class="btn btn-primary">Signup</a>
  </div>
</div>


























</div>





























<br>
<br>
<br>

<br>
















<?php 
include 'footer.php';
?>

   










  
 </body>
</html>