<?php

require_once("connection.php");

if (isset($_POST['update']))
 {
	# code...
    $UserID=$_GET['ID'];
    $UserName= $_POST['name'];
    $UserEmail=$_POST['email'];
    $UserAge= $_POST['age'];

    $query = "update records set User_Name='".$UserName."',User_Email='".$UserEmail."',User_Age='".$UserAge."' where User_ID='".$UserID."'";
    $result = mysqli_query($con, $query);

    if ($result)
     {
    	# code...
    	header("location:view.php");
    }
    else
    {
    	echo "please check your query";
    }
}
else
{
	header("location:view.php");
}

?>