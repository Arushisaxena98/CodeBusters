<?php
session_start();
	require_once('../includes/config.inc.php');
	require_once('../includes/validate.inc.php');
	require_once('../includes/function.inc.php');
$con = @new mysqli(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
					if (mysqli_connect_errno())
					{
						printf("Unable to connect to database: %s", mysqli_connect_error());
						exit();
					}
					
	$name =$_POST['name'];
	$email =$_POST['email'];
	$password =$_POST['pwd'];
	$cnf =$_POST['cnf'];
	if($password == $cnf)
	{
		$query = "SELECT * FROM `new_user` WHERE Email='$email' LIMIT 1";
		$result=mysqli_query($con,$query);
   
	if (mysqli_num_rows($result) > 0)
	{
		echo '<script type="text/javascript">alert("That Emailaddress is taken. Please choose another one");</script>';
		redirect('../main.html');
	}
	else
	{
	$query = "INSERT INTO new_user (Name,Email,Password) VALUES ('$name','$email','$password')";
	if(mysqli_query($con,$query))
   {
    session_start();
    // $_SESSION['name']=$name;
    echo '<script type="text/javascript">alert("Congratulations '.$name.'!\nYou are now registered with us")</script>';
    redirect('../main.html');
	
   }
   else
   {
    echo "Sorry! Unable to insert into the database.<br>".mysqli_error($con);
   }
  }	
	}
	else{
		echo '<script type="text/javascript">alert("Passwords don`t match! Retype Password");</script>';
		redirect('../main.html');
		}
		mysqli_close($con);
?>