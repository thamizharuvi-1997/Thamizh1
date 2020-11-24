<?php

require_once("connection.php");
$UserID = $_GET['GetID'];
$query = "select * from records where User_ID='".$UserID."' ";
$result = mysqli_query($con, $query);

while ($row=mysqli_fetch_assoc($result))
 {
	# code...
	   $UserID= $row['User_ID'];
    	$UserName= $row['User_Name'];
    	$UserEmail= $row['User_Email'];
    	$UserAge= $row['User_Age'];
}

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body class="bg-dark">
<div class="container">
	<div class="row">
		<div class="col-lg-6 m-auto">
			<div class="card mt-5">
				<div class="card-title">
					<h3 class="bg-success" style="text-align: center; color: white; padding: 5px; " >Update form in PHP</h3>
					
				</div>
				<div class="card-body">
					<form action="update.php?ID=<?php echo $UserID ?>" method="post">
						<input style="margin-bottom: 3px" type="text" class="form-control" name="name" placeholder="username" value="<?php echo $UserName ?> ">
					<input style="margin-bottom: 3px" type="email" class="form-control" name="email" placeholder="user Email" value="<?php echo $UserEmail ?>" >
					<input style="margin-bottom: 3px" type="text" class="form-control" name="age" placeholder="user Age" value="<?php echo $UserAge ?>" >
					<button style="background-color: blue; margin-top: 6px;" type="update" name="update">Update</button>
					</form>
				</div>
			</div>
		</div>
		
	</div>
</div>

</body>
</html>