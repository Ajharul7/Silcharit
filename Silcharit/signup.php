<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
	<meta charset="utf-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1">
	 <link rel="icon" type="image/png" href="https://img.icons8.com/color/96/000000/qq.png">
	 <link href='https://fonts.googleapis.com/css?family=Yesteryear' rel='stylesheet'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
	body{
		overflow-x: hidden;
		background-color: #252525;
	}
	h1 {
	font-family: Yesteryear;
}
	.main-content{
		width: 50%;
		height: 40%;
		margin: 10px auto;
		background-color: #191919;
		border: 2px solid #191919;
		padding: 40px 50px;
	}
	.header{
		border: 0px solid #000;
		margin-bottom: 5px;
		color: white;
	}
	.well{
		background-color: #393E46;
		border-radius: 0px;
		border: 0px;
	}
	#signup{
		width: 60%;
		border-radius: 30px;
		background-color: #191919;
		border: 2px solid white;
	}
	#signup:hover{
		width: 60%;
		background-color: #fff;
		color: black;
		border: 3px solid white;
		border-radius: 30px;
	}
	.glyphicon {
		color: white;
	}
	.input-group-addon {
		background-color: #0c0c0c;
	}
	@media screen and (max-width: 800px) {
		.main-content{
		width: 98%;
		height: 40%;
		margin: 10px auto;
		background-color: #191919;
		border: 2px solid #191919;
		padding: 40px 50px;
	}
	}

</style>
<body>
<div class="row">
	<div class="col-sm-13">
		<div class="well">
			<center><h1 style="color: white;"><b>Silcharit</b></h1><br></center>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-sm-12">
		<div class="main-content">
			<div class="header">
				<h3 style="text-align: center;"><strong>Join Silcharit</strong></h3>
				<hr>
			</div>
			<div class="l-part">
				<form action="" method="post">
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
						<input type="text" class="form-control" placeholder="Full Name" name="first_name" required="required">
					</div><br>
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
						<input type="text" class="form-control" placeholder="Username" name="last_name" required="required">
					</div><br>
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
						<input id="password" type="password" class="form-control" placeholder="Password" name="u_pass" required="required">
					</div><br>
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
						<input id="email" type="email" class="form-control" placeholder="Email" name="u_email" required="required">
					</div><br>
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-chevron-down"></i></span>
						<select class="form-control" name="u_country" required="required">
							<option disabled>Select your Country</option>
							<!-- <option>Pakistan</option>
							<option>United States of America</option> -->
							<option>India</option>
							<!-- <option>Japan</option>
							<option>UK</option>
							<option>France</option>
							<option>Germany</option> -->
						</select>
					</div><br>
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-chevron-down"></i></span>
						<select class="form-control input-md" name="u_gender" required="required">
							<option disabled>Select your Gender</option>
							<option>Male</option>
							<option>Female</option>
							<option>Others</option>
						</select>
					</div><br>
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
						<input type="date" class="form-control input-md" placeholder="Email" name="u_birthday" required="required">
					</div><br>
					<a style="text-decoration: none;float: right;color: white;" data-toggle="tooltip" title="Signin" href="signin.php">Already have an account?</a><br><br>

					<center><button id="signup" class="btn btn-info btn-lg" name="sign_up"><b>Signup</b></button></center>
					<?php include("insert_user.php"); ?>
				</form>
			</div>
		</div>
	</div>
</div>
</body>
</html>