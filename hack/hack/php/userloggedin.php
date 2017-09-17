<!DOCTYPE html>

<?php
	session_start();
	require_once('../includes/config.inc.php');
	require_once('../includes/function.inc.php');
	checkLoginStatusAndRedirect();
	require_once('../html/userloggedin.html');
?>	