<?php

session_start();

$con=mysqli_connect('localhost','root','','sksmedical');//global variable declaration used to connect to database and store it in variable $con
		

// register button is pressed  with the help of POST method 
if($_POST['button']=='Register')
	{
		global $con;//call the global variable
		$email=$_POST['email'];//store the data entreded in form in email tab in variable $email
		$phone=$_POST['phone'];//store the data entered in form in phone tab in variable $phoneno
		$password=$_POST['password'];//store the data entered in form in password tab in variable $password

		// insert into database user_register using sql queries  and store the result in variable $variable
		$result=mysqli_query($con,"insert into user_register values('$email',$phone,'$password')");
		if($result=1)// if the value is there in result
			{
				$msg="Registered successfully";// it will store string "resgitedrd successfully" in the variable $msg
			}
		else
			{
				$msg="error occured please try again";//otherwise it will store "error occ"
			}
		header("location:login.php?msg='$msg'");//header is used to display the message we need to send to specific page
	}



if($_POST['button']=='requirement')
  {
       
        global $con;
        $fname=$_POST['firstname'];
		$lname=$_POST['lastname'];
		$phoneno=$_POST['phno'];
		$req=$_POST['area'];
		$result=mysqli_query($con,"insert into user_requirement values('$fname','$lname',$phoneno,'$req' )");
		if($result=1)
			{
				$msg="Requirement  forwarded";
			}
		else
			{
				$msg="error occured please try again";
			}
		header("location:contact.php?msg='$msg'");
  }






if($_POST['button']=='login')
	{
		global $con;//call the global variable
		$email=$_POST['email'];//store the data entreded in form in email tab in variable $email
		$password=$_POST['password'];//store the data entered in form in password tab in variable $password

		// insert into database user_register using sql queries  and store the result in variable $variable
		$result=mysqli_query($con,"select * from user_register where email='$email'");
		$user=mysqli_fetch_assoc($result);
		if(!empty($user['email']))
			{
				if($password==$user['password'])
					{
						$_SESSION['email']=$user['email'];
						$_SESSION['phone']=$user['phonenumber'];
						header("location:index.php?msg='Login successfully'");
					}
				else
					{
						header("location:login.php?msg='Invalid User Name or Password'");
					}
			}

		else
			{
				header("location:login.php?msg='Invalid User Name or Password'");
			}



		
	}






if($_POST['button']=='confirm')
  {
       
        global $con;
        $fname=$_POST['fullname'];
		$email=$_POST['email'];
		$address=$_POST['address'];
		$city=$_POST['city'];
		$state=$_POST['state'];
		$zip=$_POST['zip'];
		$result=mysqli_query($con,"insert into placed_orders values('$fname','$email','$address','$city','$state',$zip )");
		if($result=1)
			{
				$msg="Ordered successfully...You will be notified shortly";
			}
		else
			{
				$msg="error while processing your order";
			}
		header("location:checkout.php?msg='$msg'");
  }




















      



?>