<?php 

session_start(); 
$database_name="product_details";
$con= mysqli_connect("localhost","root","",$database_name);
include 'navbar.php';

?>
<head>
	<script type="text/javascript">
		$(document).ready(function(){
    $("#share").jsSocials({
            shares: ["email", "twitter", "facebook", "googleplus", "linkedin", "pinterest", "stumbleupon", "whatsapp"]
        });
        $("#share").css("font-size", 12);
}); 
	</script>
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
<body>




<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Product..</h1>
    <p class="lead">Details for the product you selected..</p>
  </div>
</div>



<?php

  $a=$_GET['id'];

  $query1="SELECT * from product where id = $a";
  $result=mysqli_query($con,$query1);
  $record=mysqli_fetch_assoc($result);
  
?>








<div class="container w-75  border"  tabindex="-1"  aria-hidden="true" >
            <div >
                <div >
                    <div >
                       
                           
                        <div class="row">
                            <div class="col-xs-12 col-sm-5 col-md-5">
                                <div class="product_img"><img class="img-responsive" src="<?php echo $record['image']; ?>"  alt="product x01" width="400"  "></div>
                            </div>
                            <div class="col-xs-12 col-sm-7 col-md-7">
                                <div class="details-product">
                                    <h1><?php echo $record['pname']; ?></h1>
                                    <small>Product by: <a href="sksmedicalinc.ml">Sksmedicalinc</a></small>
                                    <ul class="stars">
                                        <li><span class="fa fa-star"></span></li>
                                        <li><span class="fa fa-star"></span></li>
                                        <li><span class="fa fa-star"></span></li>
                                        <li><span class="fa fa-star-half-o"></span></li>
                                        <li><span class="fa fa-star-o"></span></li>
                                        <li><a ><label class="label label-info">Vote</label></a></li>
                                    </ul>
                                    <h2> ₹<?php echo $record['price']; ?></h2>
                                    <p><?php echo $record['Details']; ?></p>
                                    <a href="cat.php"> Back to catalogues..</a>
                                     <input type="submit" name="add" style="margin-top: 5px;" class="btn btn-success" value="Add to cart">    
                                   
                                    
                            </div>
                        </div>
                    </div>
               
                </div>
            </div>
        </div>
    </div>
</div>


<br>
<br>










<?php include 'footer.php'; ?>

</body>
</html>