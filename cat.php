<?php 
session_start();
$database_name="product_details";
$con= mysqli_connect("localhost","root","",$database_name);





include 'navbar.php'
?>
    
    <head>
      <style type="text/css">
        
        .details-product > ul {
    padding: 0;
    margin: 10px 0;
    list-style-type: none;
}
.details-product > ul > li {
    display: inline-block;
}
.details-product > ul {
    padding: 0;
    margin: 10px 0;
    list-style-type: none;
}
.details-product {
    padding: 20px 20px 10px;
}
.product_img > img {
    width: 100%;
}
.details-product > p{
    text-align: justify;
}
.stars> li {
    color: #a07634;
}

      </style>
    </head>








<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Products and Services</h1>
    <p class="lead"> SKS is the name of a company who is exporting hospital furniture since last five years to 25 countries on every lenght and width of globe . As a professional hospital furniture manufacturer SKS develop and established a team in which has various experts on various fields such as electrical engineer, requirement analyzer, tester, and various others who has expertise in the require fields. Actually now these days medical profession is bumming very rapidly and regularly new searches is developed. So every medical profession require new medical furniture tools and equipments which has advance functionality as well as latest technology which is give maximum comfort to the patient and more convenient for medical institution caring staff.<br><strong>Check out from our available list of products and categories.</strong>
      <br><br><span>Go to <a href="cart.php">Cart</a></span></p>
  </div>
</div>













<?php if(isset($_GET['msg'])) { ?>
        <div class="alert alert-warning alert-dismissible fade show w-50" role="alert">
            <?php echo $_GET['msg'];?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
        </div>

<?php } ?>



<div class="container m-75">
<div class="d-flex flex-wrap">
<?php
  $query1="SELECT * from product";
  $result=mysqli_query($con,$query1);
  while($record=mysqli_fetch_assoc($result))
      {
?>

  <div class="p-2 bd-highlight"><form method="post" action="cartupdate.php?id=<?php echo $record["id"]?>">
      <div class="card" style="width: 18rem;">
        <img src="<?php echo $record["image"];?>" style="height: 15rem;" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">
            <?php echo $record["pname"];?><br>
            ₹<?php echo $record["price"]; ?><br>
               Quantity (between 1 and 5): <input type="number" name="quantity" min="1" max="5" class="form-control"  > 
              <input type="hidden" name="hidden_name" value="<b><?php echo $record["pname"]; ?> </b>">
              <input type="hidden" name="hidden_name" value="<?php echo $record["price"]; ?>">
              <input type="submit" name="add" style="margin-top: 5px;" class="btn btn-success" value="Add to cart">    
              <a href="pdisplay.php?id=<?php echo $record["id"]?>">Know more</a>
          </p>
        </div>
      </div>
    </form></div>
<?php } ?>
</div>
</div>


<?php 
include 'footer.php';
?>





























































































































































































</body>
</html>