<!DOCTYPE html>
<html>
<head>
	<title>Sign-In</title>
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
	#signin{
		width: 60%;
		border-radius: 30px;
		background-color: #191919;
		color: white;
		border: 3px solid white;
	}
	#signin:hover{
		width: 60%;
		background-color: white;
		color: black;
		border: 3px solid white;
		border-radius: 30px;
	}
	.overlap-text{
		position: relative;
	}
	.overlap-text a{
		position: absolute;
		top: 8px;
		right: 10px;
		font-size: 14px;
		text-decoration: none;
		font-family: 'Overpass Mono', monospace;
		letter-spacing: -1px;

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
	<div class="col-sm-12">
		<div class="well">
			<center><h1 style="color: white;"><b>Silcharit</b></h1><br></center>
		</div>
	</div>
</div><br><br>
<div class="row">
	<div class="col-sm-12">
		<div class="main-content">
			<div class="header">
				<h3 style="text-align: center;"><strong>Login to Silcharit</strong></h3><br>
			</div>
			<div class="l-part">
				<form action="" method="post">
					<input type="email" name="email" placeholder="Email" required="required" class="form-control input-md"><br>
					<div class="overlap-text">
						<input type="password" name="pass" placeholder="Password" required="required" class="form-control input-md"><br><a></div> 
						<!-- remove the above </div> for forget password -->
						<!-- <a style="text-decoration:none;float: right;color: #187FAB;" data-toggle="tooltip" title="Reset Password" href="forgot_password.php">Forgot?</a>
					</div> -->
					<a style="text-decoration: none;float: right;color: white;" data-toggle="tooltip" title="Create Account!" href="signup.php">Don't have an account?</a><br><br>

					<center><button id="signin" class="btn btn-info btn-lg" name="login">Login</button></center>
					<?php include("login.php"); ?>
				</form>
			</div>
		</div>
	</div>
</div>
</body>
</html>