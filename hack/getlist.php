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
if(isset($_POST['sub'])){
  $sub = $_POST['sub'];
$sql = "SELECT DISTINCT CATEGORY,SUBCATEGORY FROM project WHERE CATEGORY like '%".$sub."%' OR SUBCATEGORY like '%".$sub."%' ";
	$result=$conn->query($sql);
	if($result == false)
	{
		echo"query not running";
		exit;
	}
	$rowcount=mysqli_num_rows($result);
	if ($rowcount > 0) {
		$s="<p value=''></p>";// output data of each row
    while($row = mysqli_fetch_assoc($result)) {	
       $s= "<p value='$row[SUBCATEGORY]'>$row[CATEGORY]</p>
	   <p value=$row[SUBCATEGORY]>$row[SUBCATEGORY]</p>";
	echo $s;
	}
	echo "this";
	}
	else {
		echo"<h3>NO Such Project Found</h3>";
	}
}
else{
	
echo "3";
}
mysqli_close($conn);
?>
