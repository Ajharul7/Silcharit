<!DOCTYPE html>
<?php
session_start();
include("includes/header.php");

if(!isset($_SESSION['user_email'])){
    header("location: index.php");
}
?>
<html>
<head>
    <title>View Post</title>
    <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="icon" type="image/png" href="https://img.icons8.com/color/96/000000/qq.png">
     <link href='https://fonts.googleapis.com/css?family=Yesteryear' rel='stylesheet'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style/home_style2.css">
</head>
<body>
    <div class="row">
     <div class="col-sm-12">
     <center><h2 style="color: white;font-family:yesteryear">Comments</h2></center><br>
     <?php single_post3(); ?>
     </div>
     </div>
</body>
</html>