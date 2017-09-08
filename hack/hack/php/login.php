<?php
	session_start();
	require_once('../includes/config.inc.php');
	require_once('../includes/validate.inc.php');
	require_once('../includes/function.inc.php');
		
		//if(isset($_POST['hpcs_Universe_rememberme'])){
			
		//	setcookie("userid","");
		//}
		//if(isset($_POST['hpcs_Universe_username']) && isset($_POST['hpcs_Universe_password']))
		//{
			
			$username = test_input($_POST['username']);
		if(!$username=="")	
		{
			//if (!preg_match("/^[a-zA-Z0-9 ]*$/",$username)) $usernameErr = "Only alphanumeric characters allowed in Username !";
		
			
				$mysqli = @new mysqli(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
				if (mysqli_connect_errno()) 
				{
					printf("Unable to connect to database: %s", mysqli_connect_error());
					exit();
				}

				$username = $mysqli->real_escape_string($_POST['username']);
				$pass = $mysqli->real_escape_string($_POST['pass']);
				
				$sql = "SELECT * FROM new_user WHERE ( Email ='".$username."') AND Password='" .$pass. "'";
				$result=$mysqli->query($sql);
				
				if ($result->num_rows == 1) 
				{	
					/* if(isset($_POST['rememberme'])){ //remember me checked
						setcookie("login_username",$username,time() + (86400  * 30),"/");
						setcookie("login_pass",$pass,time() + (86400  * 30),"/");
					} */
					
					$rows = mysqli_fetch_array($result);
					redirect('../html/try.html');
					
					/*if($username == "admin")
					{
						redirect('welcomeManager.php');
					}
					else
					{
						redirect('welcomeFDU.php');
					} */
				}
				else 
				{
					echo "<script type='text/javascript'> alert('Invalid Username and/or Password!');</script>";	
					redirect('../main.html');
				}
				
			}
			else 
			{
				
				redirect('../main.html');
			}
			
		

?>		
