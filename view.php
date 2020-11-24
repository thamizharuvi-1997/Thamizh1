<?php

require_once("connection.php");
$query = "select *from records";
$result = mysqli_query($con, $query);

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>View Records</title>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body class="bg-dark">
<div class="container">
	<div class="row">
		<div class="col m-auto">
			<div class="card mt-5">
				<table class="table table-bordered">
					<tr>
						<td>User ID</td>
					    <td>User Name</td>
					    <td>User Email</td>
					    <td>User Age</td>
					    <td>Edit</td>
					    <td>Delete</td>
					</tr>
 <?php
    while($row=mysqli_fetch_assoc($result))
     {
    	# code...
    	$UserID= $row['User_ID'];
    	$UserName= $row['User_Name'];
    	$UserEmail= $row['User_Email'];
    	$UserAge= $row['User_Age'];
    
 ?>
         <tr>
         	<td><?php echo $UserID ?></td>
         	<td><?php echo $UserName ?></td>
         	<td><?php echo $UserEmail ?></td>
         	<td><?php echo $UserAge ?></td>
         	<td><a href="edit.php?GetID=<?php echo $UserID ?>">Edit</a></td>
         	<td><a href="delete.php?Del=<?php echo $UserID ?>">Delete</a></td>
         </tr>
         <?php
   }

         ?>


				</table>
				</div>	
			</div>			
		</div>
	</div>

</body>
</html>