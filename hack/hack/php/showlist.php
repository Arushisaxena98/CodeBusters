<?php
session_start();
require_once('../includes/config.inc.php');
//require_once('includes/function.inc.php');

$conn = @new mysqli(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
// Check connection
if (mysqli_connect_errno()) 
			{
				printf("Unable to connect to database: %s", mysqli_connect_error());
				exit();
			}
if(isset($_POST['sub']))
{
  $sub = $_POST['sub'];
  $sendcat = $_POST['sendcat'];
  if($sendcat == 'true')
  {
		$sqlscnd = "SELECT DISTINCT CATEGORY FROM project WHERE CATEGORY like '".$sub."%' ";
		$resultscnd=$conn->query($sqlscnd);
	if($resultscnd == false)
	{
		echo"query not running";
		exit;
	}
		$rowcountscnd=mysqli_num_rows($resultscnd);
	
	if ($rowcountscnd > 0)
	{		
			$n=1;
			while($rowcat = mysqli_fetch_assoc($resultscnd))
			{ 
				echo "<p value='$rowcat[CATEGORY]'>CATEGORY :$n.. $rowcat[CATEGORY]</p>";
				$n++;
			}
	}
	else 
	{
			echo"<h3>NO Such Project Found</h3>";
	}
  }
  else
  {
		$sqlsub = "SELECT SUBCATEGORY FROM project WHERE SUBCATEGORY like '%".$sub."%' ";
		$resultsub=$conn->query($sqlsub);
	if($resultsub == false)
	{
		echo"query not running";
		exit;
	}
		$rowcount=mysqli_num_rows($resultsub);
	
	if ($rowcount > 0) 
	{	$n=1;
		while($row = mysqli_fetch_assoc($resultsub)) 
			{	
			echo "<p value='$row[SUBCATEGORY]'>$n.. $row[SUBCATEGORY]</p>";
			$n++;
			}
	}
	else 
	{
			echo"<h3>NO Such Project Found</h3>";
	}
  }
}
else{
	
echo "3";
}
mysqli_close($conn);
?>
