<?php 

require_once("connection.php");
if (isset($_GET['Del']))
 {
	# code...
	$UserID = $_GET['Del'];
	$query= "delete from records where User_ID = '".$UserID."'";
	$result= mysqli_query($con, $query);

	if ($result)
	 {
		# code...
		header ("location:view.php");
	}
	else
	{
		echo "please check your query";
	}
}

else {
	header("location:view.php");
}
?>