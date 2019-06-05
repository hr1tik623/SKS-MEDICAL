

<?php 

session_start(); 
include 'navbar.php';

?>





<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h2 class="display-4">Sign in</h1>

      <?php if(isset($_GET['msg'])) { ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <?php echo $_GET['msg'];?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
        </div>
      <?php } ?>
    </div>
</div>
<div class="container">
<form action="db.php" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" placeholder="Password"    pattern=".{8,}"   required title="It must be 8 characters minimum"       >
  </div>
  <button type="submit" class="btn btn-primary" name="button" value="login">login</button>

</form>
  

  
  
  <div style="float: right;"><p>New to our website Register here </p>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Sign Up</button>
  </div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Register Here</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form action="db.php" method="post">
          <div class="form-group">
            <input type="email" class="form-control"                        required="" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
          </div>
          <div class="form-group">
            <input type="number" class="form-control" name="phone"  pattern=".{10,13}"   required title="It must be  a valid phone number"                       id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Phone No.">
          </div>
          <div class="form-group">
            <input type="password" class="form-control" name="password"     pattern=".{8,}"   required title="It must be 8 characters minimum"                       id="exampleInputPassword1" placeholder="Password">
          </div>
          <button style="float: right;" type="submit" class="btn btn-primary" name="button" value="Register">Register</button>
        </form>


      </div>
    </div>
  </div>
</div>


</div>


















<?php
include 'footer.php';
?>












</body>
</html>