<html>

<?php
session_start();
include("includes/header.php");

if(!isset($_SESSION['user_email'])){
    header("location: index.php");
}
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style/home_style2.css">
</head>
<body>
 <div class="row">
     <?php

        if(isset($_GET['u_id'])){
            $u_id = $_GET['u_id'];
        }
        if($u_id < 0 || $u_id == ""){
            echo"<script> window.open('home.php','_self')</script>";
        }else{
            ?>

            <div class="col-sm-12">
                <?php
                if(isset($_GET['u_id'])) {

                    global $con;

                    $user_id = $_GET['u_id'];

                    $select = "select * from users where user_id='$user_id'";
                    $run = mysqli_query($con, $select);
                    $row = mysqli_fetch_array($run);

                    $name = $row['user_name'];
                }
                ?>

                <?php
                if(isset($_GET['u_id'])){
                    global $con;

                    $user_id = $_GET['u_id'];

                    $select = "select * from users where user_id='$user_id'";
                    $run = mysqli_query($con, $select);
                    $row = mysqli_fetch_array($run);

                    $id = $row['user_id'];
                    $image = $row['user_image'];
                    $name = $row['user_name'];
                    $f_name = $row['f_name'];
                    $l_name = $row['l_name'];
                    $describe_user = $row['describe_user'];
                    $country = $row['user_country'];
                    $gender = $row['user_gender'];
                    $register_date = $row['user_reg_date'];
                    
                    echo" <br><br>
                        <div class='row'>
                            <div class='col-sm-4'>
                            </div>
                            <center>
                            <div style='background-color: #191919;border: 4px solid black;' class='col-sm-3' id='usercard'>
                            <h2><b style='color:white'>Information</b></h2><br>
                            <img class='img-circle' src='users/$image' width='150' height='150'>
                            <br><br>
                            <ul class='list-group'>
                            <li class='list-group-item' title='Username'><strong> Name:</strong> $f_name </li>
                            <li class='list-group-item' title='Username'><strong style='color:grey;'> $describe_user </strong></li>
                            <li class='list-group-item' title='Gender'><strong> Gender: </strong>$gender </li>
                            <li class='list-group-item' title='Country'><strong> Country: </strong>$user_country</li>
                            <li class='list-group-item' title='User Registration Date'><strong> Joined On: </strong>$register_date</li>
                            </ul>
                            ";
                            $user = $_SESSION['user_email'];
                            $get_user = "select * from users where user_email='$user'";
                            $run_user = mysqli_query($con, $get_user);
                            $row = mysqli_fetch_array($run_user);

                            $userown_id = $row['user_id'];

                            if($user_id == $userown_id) {
                                // echo"<a herf='edit_profile.php?u_id=$userown_id' class='btn btn-success'/>Edit Profile</a><br><br>";
                            }

                            echo "
                            </div>
                            </center>
                            ";
                }
            ?>
            </div>
            </div>
            <?php } ?>
</body>
</html>