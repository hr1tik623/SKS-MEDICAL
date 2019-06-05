<?php 

session_start(); 
$database_name="product_details";
$con= mysqli_connect("localhost","root","",$database_name);
include 'navbar.php';
$grandtotal=0;

?>









<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Shopping Cart</h1>
    <p class="lead">Below are the items you added in your cart.</p>

<br>


<?php 
if(empty($_SESSION['cart_items']))
	{	?>

<div class="alert alert-warning" role="alert">
    Your Cart is empty ..go to our product <a href="cat.php">catalogue..</a>
</div>

<?php } else { ?>




<table class="table">
  
  <thead>
    <tr>
      <th>Id</th>
      <th scope="col" width="30%">Product Name</th>
      <th scope="col" width="10%">Quantity</th>
      <th scope="col" width="13%">Price details</th>
      <th scope="col" width="10%">Total</th>
      <th scope="col" width="17%"> Remove item</th>
    </tr>
  </thead>



  <tbody>
<?php for($i=0;$i<count($_SESSION['cart_items']);$i++) { $x=$_SESSION["cart_items"][$i];  $details=mysqli_query($con,"Select * from product where id='$x'") ;
	$data=mysqli_fetch_assoc($details);
	
	?>
    <tr>
      <th scope="row"><?php echo $_SESSION['cart_items'][$i]?></th>

      <td><?php echo $data['pname'] ?></td>
      <td><?php echo $_SESSION['cart_value'][$i]?></td>
      <td> ₹ <?php echo  number_format($data['price']) ?></td>
      <td> <?php $value=$data['price']*$_SESSION['cart_value'][$i];$grandtotal+=$value; echo  number_format($value,2); ?></td>
      <td><a href="cartdelete.php?action=delete&id=<?php echo $_SESSION['cart_items'][$i];?>"><img src="removeitem.png" style="color: red;"></a></td>         
    </tr>
    <tr> 

<td colspan="7"> <span class="border border-dark"><img src="<?php echo($data['image']); ?> " style="height: 15rem;  width: 20rem;" class="card-img-top" alt="..."></span></td>
    </tr>
<?php } ?>

    <tr>
    	
    	<td align="right" colspan="3"><b>Total: </b></td>
    	<th align="right"> ₹ <?php  echo number_format($grandtotal,2); ?></th>
    	<td colspan="2"><button class="btn-sm"><a href="checkout.php"> Proceed to payment</a></button></td>
    </tr>







  </tbody>
    <caption><b> UserId:</b><?php echo($_SESSION['email']) ; ?>    </caption>

</table>


<?php } ?>

  </div>
</div>




<?php 
include 'footer.php';
?>
