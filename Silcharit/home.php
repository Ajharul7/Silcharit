<!DOCTYPE html>
<?php
session_start();
include("includes/header.php");
include("functions/functions.php");

if(!isset($_SESSION['user_email'])){
	header("location: index.php");
}
?>
<html>
<head>
	<?php
		$user = $_SESSION['user_email'];
		$get_user = "select * from users where user_email='$user'";
		$run_user = mysqli_query($con,$get_user);
		$row = mysqli_fetch_array($run_user);

		$user_name = $row['user_name'];
	?>
	<title>Silcharit-Home</title>
	<meta charset="utf-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1">
	 <link href='https://fonts.googleapis.com/css?family=Slackey' rel='stylesheet'>
	 <link href='https://fonts.googleapis.com/css?family=Yesteryear' rel='stylesheet'>
	 <link href='https://fonts.googleapis.com/css?family=Bebas Neue' rel='stylesheet'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="icon" type="image/png" href="https://img.icons8.com/color/96/000000/qq.png">
	<link rel="stylesheet" type="text/css" href="style/home_style2.css">
</head>
<body>	
<div class="cat"><div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
	  <img src="https://images.unsplash.com/photo-1415025148099-17fe74102b28?ixlib=rb-1.2.1&auto=format&fit=crop&w=840&q=80" alt="Avatar" style="width:300px;height:300px;">
	  <h2 class="centered" style="font-family: Slackey;color: white;text-shadow: 4px 4px 1px black;"><b>Categories</b></h2>
    </div>
    <div class="flip-card-back">
      <br><br>
      <h4 style="font-family: Bebas Neue;font-size:30px;"><b><a href="problems.php"><span>&#8226;</span> Problems</a></b></h4> 
	  <h4 style="font-family: Bebas Neue;font-size:30px;"><b><a href="meme.php"><span>&#8226;</span> Memes</a> </b></h4>
	  <h4 style="font-family: Bebas Neue;font-size:30px;"><b><a href="news.php"><span>&#8226;</span>News</a> </b></h4>
	  <h4 style="font-family: Bebas Neue;font-size:30px;"><b><a href="animalrescue.php"><span>&#8226;</span> Animal Rescue</a></b></h4>
    </div>
  </div>
</div></div>
<div class="row">
<center><h1 style="font-family: Bebas Neue;color: white;text-shadow: 4px 4px 1px black;"> Home </h1></center>
	<div class='move'>
	<br><br><div id="insert_post" class="col-sm-9">
		<!-- <center> -->
		<form action="home.php?id=<?php echo $user_id; ?>" method="post" id="f" enctype="multipart/form-data">
		<textarea class="form-control" id="content" rows="1" name="content" placeholder= "Title" style="width: 83%;"></textarea>
		<label class="btn btn-info btn-lg" id="upload_image_button"><span class="glyphicon glyphicon-picture"></span>
		<input type="file" name="upload_image" size="30">
		</label><br>
		<button id="btn-post" class="btn btn-info btn-lg" name="sub">Post</button><br><br>
		</form>
		<?php insertPost(); ?>
		<!-- </center> -->
	</div>
</div>
</div>
<div class="row">
	<div class="col-sm-12">
		<h3 style="color: white;font-family: slackey;text-shadow: 6px 6px 1px black;" class="move1"><strong>NEWS FEED</strong></h3><br>
		<?php echo get_posts(); ?>
	</div>
</div>
</body>
</html>



<!-- <div class="card"><h1 style="font-family:yesteryear;padding-left:26%;padding-top:10%;"><u>Catagories</u></h1>
<ul style="font-family:yesteryear;padding-left:30%;"><h3>
	<li>Problems</li>
	<li>Animal Rescue</li>
	<li>Memes</li>
	<li>Animal Rescue</li>
	<li>Animal Rescue</li><br><br>
	</ul></h3>
</div> -->