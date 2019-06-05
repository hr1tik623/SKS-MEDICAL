<?php 
session_start();
if (isset($_GET["action"])) {
	if($_GET["action"]=="delete")
	{		var_dump($_SESSION);

for($i=0;$i<count($_SESSION['cart_items']);$i++)
	if($_GET['id']==$_SESSION['cart_items'][$i])
		{array_splice($_SESSION['cart_items'],$i,1);
			array_splice($_SESSION['cart_value'],$i,1);

                    header("location:cart.php?msg='Item successfully removed.'");
}
			
		
	}




}


 ?>
