<html>
<style>
    h4 {
        color: black;
    }
</style>
<?php
    $get_id = $_GET["post_id"];

    $get_com = "select * from comments4 where post_id='$get_id' ORDER by 1 DESC";

    $run_com = mysqli_query($con, $get_com);

    while($row = mysqli_fetch_array($run_com)){
        $com = $row['comment'];
        $com_name = $row['comment_author'];
        $date = $row['date'];

        echo"
        <div class='row'>
        <div class='col-md-6 col-md-offset-3'>
        <div class='panel panel-info'>
        <div class='panel-body'>
        <div>
        <h5><strong>$com_name</strong><strong><div style='float:right;'>$date</strong></div></h5>
        <p class='text-primary'
         style='margin-left:5px;font-size:20pxx;'>$com</p>
         </div>
         </div>
         </div>
         </div>
         </div>
         ";
    }
?>
    