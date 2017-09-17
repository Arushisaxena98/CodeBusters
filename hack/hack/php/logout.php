<?php
	
	require_once('../includes/function.inc.php');
	session_start();
	if (check_login_status() == false) 
	{
		redirect('../main.php');
	} 
	else 
	{
		unset($_SESSION['project_username_logged_in']);

		unset($_SESSION['project_username']);
		
		session_destroy();
		redirect('../main.php');
	}
?>