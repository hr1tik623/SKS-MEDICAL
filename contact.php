<?php session_start();
include 'navbar.php'?>


<div class="jumbotron">
  <h1 class="display-4">Contact us</h1>

    <hr class="my-4">
  	<a href="https://goo.gl/maps/B5LMA7zSsg42" target="_blank"><img src="map.png" style="color: red;"></a>
      <p class="card-text">SKS Medical Private Limited inc<br>
    	Gaurav Sood<br>
    	No. 156/57/58,
    	<br>Sohna Pali road<br>
    	Faridabad 121009,
    	<br>Haryana,India

    </p>
</div>




    <div class="container">  
    <h2 class="display-4">Submit you requirement</h2>

    <h2 class="lead">Fill in the enquiry form below.</h2>
    <?php if(isset($_GET['msg'])) { ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <?php echo $_GET['msg'];?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
        </div> </div>

      <?php } ?>
  









<div class="container">
<form action="db.php" method="post" >
<div class="row"  >
    <div class="col">
      <input type="text" class="form-control" name="firstname" required="" placeholder="First name">
    </div>
    <div class="col">
      <input type="text" class="form-control" name="lastname" required="" placeholder="Last name">
    </div>
  </div>
  <br>
<div >
      <input type="Number" class="form-control" id="inputphno"  name="phno" required=""   placeholder="Phone Number">
    </div>
<br>
     <div class="form-group">
    <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Enter your requirement here ......"   name="area"      required=""      rows="5"></textarea>
  </div>
  <button type="submit" class="btn btn-primary" name="button" value="requirement">Contact supplier</button>
  </div>    
  </div>
</form>

</div>








<?php 
include 'footer.php';
?>


</body>
</html>