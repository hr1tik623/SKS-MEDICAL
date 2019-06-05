<?php
session_start();

if (is_null($_SESSION['email'])) {
	header("location:login.php?msg='You need to login first.'");	
}


else{
	if (isset($_SESSION['cart_items']))
	{
	array_push($_SESSION['cart_items'],$_GET['id']);
		array_push($_SESSION['cart_value'],$_POST['quantity']);
	}

	else 
	{
	    $_SESSION['cart_items']=array($_GET['id']);
		$_SESSION['cart_value']=  array( $_POST['quantity']);
	}

	header("location:cat.php?msg='Item successfully added in cart.'");
}					

?>