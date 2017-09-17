<?php
session_start();
require_once('includes/config.inc.php');
require_once('includes/function.inc.php');

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
//$sql = "SELECT CATEGORY,SUBCATEGORY FROM project WHERE CATEGORY like '%".$sub."%' OR SUBCATEGORY like '%".$sub."%' ";
$sqlscnd = "SELECT DISTINCT CATEGORY FROM project WHERE CATEGORY like '".$sub."%' ";
$sqlsub = "SELECT SUBCATEGORY FROM project WHERE SUBCATEGORY like '%".$sub."%' ";
	//$result=$conn->query($sql);
	$resultscnd=$conn->query($sqlscnd);
	$resultsub=$conn->query($sqlsub);
	if($resultscnd == false || $resultsub == false)
	{
		echo"query not running";
		exit;
	}
	$rowcount=mysqli_num_rows($resultsub);
	$rowcountscnd=mysqli_num_rows($resultscnd);
	if ($rowcountscnd > 0)
	{		
			echo "category";
			/* while($rowscnd = mysqli_fetch_assoc($resultsub)) 
			{	
				$s= "<p value=$rowscnd[SUBCATEGORY]>SUBCATEGORY : $rowscnd[SUBCATEGORY]</p>";
				echo $s;
			} */
		
	}
	else
	{	
		echo "subcategory";
	/* if ($rowcount > 0) 
		{
		while($row = mysqli_fetch_assoc($resultsub)) 
			{	
			echo "<p value='$row[SUBCATEGORY]'>$row[SUBCATEGORY]</p>";
			}
		}
	else 
		{
			echo"<h3>NO Such Project Found</h3>";
		} */
	}
}
else{
	
echo "3";
}
mysqli_close($conn);
?>
