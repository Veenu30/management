<!DOCTYPE html>
<html>
<head>
	<title>Login/register</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

	<style>
		.box{
			margin-top: 180px;
			margin-bottom: 80px;
			vertical-align: middle;
		}
		.heading{
			border: none;
			border-radius: 5px;
			background: linear-gradient(to right, #7adef5, #4998ec);
			padding: 8px;
		}
		.btn{
			border: none;
			border-radius: 5px;
			background-color: #7adef5;
			width: 100%;
			font-weight: 500;
			font-size: 18px;
		}
		.btn:hover{
			background: linear-gradient(to right, #7adef5, #4998ec);
		}
	</style>
</head>
<body>

	<div class="container"> 
		<div class="row box">
			<div class="col-lg-4 offset-lg-1">
				<center>
				<h2 class="heading"> Login </h2></center>
				<form action="validation.php" method="POST">
					<div class="form-group">
						<label>Username</label>
						<input type="text" name="username" class="form-control">			
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" name="password" class="form-control">			
					</div>
					<button type="submit" class="btn" name="submit">Login</button>
				</form>
			</div>
				
			<div class="col-lg-4 offset-lg-1">
				<center>
				<h2 class="heading"> Register </h2></center>
				<form action="registration.php" method="POST">
					<div class="form-group">
						<label>Username</label>
						<input type="text" name="username" class="form-control">			
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" name="password" class="form-control">			
					</div>
					<button type="submit" class="btn" name="submit">Register</button>
			</div>
		</div>
	  </div>







<!-- JSCDN -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
</body>
</html>