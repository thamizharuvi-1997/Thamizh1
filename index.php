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
					<h3 class="bg-success" style="text-align: center; color: white; padding: 5px; " >Registration form in PHP</h3>
					
				</div>
				<div class="card-body">
					<form action="insert.php" method="post">
						<input style="margin-bottom: 3px" type="text" class="form-control" name="name" placeholder="username" required="">
					<input style="margin-bottom: 3px" type="email" class="form-control" name="email" placeholder="user Email" required="">
					<input style="margin-bottom: 3px" type="text" class="form-control" name="age" placeholder="user Age" required="">
					<input style="background-color: blue; margin-top: 6px;" type="submit" name="submit">
					</form>
				</div>
			</div>
		</div>
		
	</div>
</div>

</body>
</html>