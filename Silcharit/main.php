<!DOCTYPE html>
<html>
<head>
	<title>Silcharit</title>
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
		color: white;
	}
	h1 {
	font-family: Yesteryear;
}
	#centered1{
		position: absolute;
		font-size: 10vw;
		top: 30%;
		left: 30%;
		transform: translate(-50%, -50%);
	}
	#centered2{
		position: absolute;
		font-size: 10vw;
		top: 50%;
		left: 40%;
		transform: translate(-50%, -50%);
	}
	#centered3{
		position: absolute;
		font-size: 10vw;
		top: 70%;
		left: 30%;
		transform: translate(-50%, -50%);
	}
	#signup{
		width: 60%;
		border-radius: 30px;
		background-color: #191919;
		border: 2px solid white;
	}
	#login{
		width: 60%;
		background-color: #191919;
		border: 2px solid white;
		color: white;
		border-radius: 30px;
	}
	#login:hover{
		width: 60%;
		background-color: #fff;
		color: black;
		border: 3px solid white;
		border-radius: 30px;
	}
	#signup:hover{
		width: 60%;
		background-color: #fff;
		color: black;
		border: 3px solid white;
		border-radius: 30px;
	}
	.well{
		background-color: #393E46;
		border-radius: 0px;
		border: 0px;
		width: 100%;
	}
	img {
		width:550px;
		height:500px ;
	}
	#move2 {
		left:0.8%;
		right:0.5%;
	}
	.silcharit {
	  background-color: #393E46;
	  width: 84%;
	  height: 470px;
	  border-radius: 7px;
	  text-align:center;
  }
	@media screen and (max-width: 800px) {
	.col-sm-6 {
		text-align: center;
	}
	#centered1{
		position: absolute;
		font-size: 10vw;
		top: 30%;
		left: 45%;
		transform: translate(-50%, -50%);
		white-space: nowrap;
	}
	#centered2{
		position: absolute;
		font-size: 10vw;
		top: 50%;
		left: 40%;
		transform: translate(-50%, -50%);
		
		
	}
	#centered3{
		position: absolute;
		font-size: 10vw;
		top: 70%;
		left: 47%;
		transform: translate(-50%, -50%);
		white-space: nowrap;
	}
	.centered {
		text-align:center;
	}
	img {
		width:100%;
		height:500px ;
	}
	#move2 {
		left:0%;
		right:0%;
		text-align:center;
	}
	.well{
		background-color: #393E46;
		border-radius: 0px;
		border: 0px;
		width: 97%;
	
	}
	.silcharit {
	  background-color: #393E46;
	  width: 100%;
	  height: 470px;
	  border-radius: 7px;
	  text-align:center;
  }
}
	

</style>
<body>
	<div class="row">
			<div class="well">
				<center><h1 style="color: white;"><b>Silcharit</b></h1><br></center></div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6" id="move2">
			<div class="silcharit" title="Coding cafe">
				<br><br><br><br><br>
			<h3 style=""><span class="glyphicon glyphicon-search"></span>&nbsp&nbsp<strong>Follow Your Interests.</strong></h3><br><br>
			<h3 style=""><span class="glyphicon glyphicon-search"></span>&nbsp&nbsp<strong>Hear what People are talking about.</strong></h3><br><br>
			<h3 style=""><span class="glyphicon glyphicon-search"></span>&nbsp&nbsp<strong>Join the Conversation.</strong></h3>
		</div></div>
		<div class="col-sm-6" style="left:8%:"><br><br><br><br>
			<h2><strong>See what's happening in <br> Silchar right now</strong></h2><br><br>
			<h4><strong> Join The Community.</strong></h4><br>
			<form method="post" action="">
				<button id="signup" class="btn btn-info btn-lg" name="signup">Sign up</button><br><br>
				<?php
					if(isset($_POST['signup'])){
						echo "<script>window.open('signup.php','_self')</script>";
					}
				?>
				<button id="login" class="btn btn-info btn-lg" name="login">Login</button><br><br>
				<?php
					if(isset($_POST['login'])){
						echo "<script>window.open('signin.php','_self')</script>";
					}
				?>
			</form>
		</div>
	</div>
</body>
</html>