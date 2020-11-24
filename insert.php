<?php
 require_once("connection.php");


if (isset($_POST['submit']))
 {
	# code...
	if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['age']))
	 {
		# code...
		echo "please fill it";
	}
	else
	{
		$UserName = $_POST['name'];
		$UserEmail = $_POST['email'];
		$UserAge =$_POST['age'];

		$query = "insert into records (User_Name, User_Email, User_Age) values('$UserName','$UserEmail','$UserAge')";
		$result= mysqli_query($con , $query);

		if ($result)
		 {
			# code...
			header("location:view.php");
		}
		else
		{
			echo 'please check your query';
		}
	 }
   }
	else
	{
		header("location:index.php");
	}



?>