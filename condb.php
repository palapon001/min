<?php
//$con= mysqli_connect("l0ebsc9jituxzmts.cbetxkdyhwsb.us-east-1.rds.amazonaws.com","b3cgvp925x172js2","bayxhkgky93rxo8l","ftfqqrzb99yzjkmq");
$host = "localhost";
$user = "root";
$pass = "";
$db = "min";
$con= mysqli_connect($host,$user,$pass,$db);//Local
if(!$con){
   die("condb err");
}
else{
    //echo "condb succ";
}
mysqli_query($con, "SET NAMES 'utf8' "); 
?>