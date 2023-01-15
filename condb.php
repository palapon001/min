<style>
html {
  background-color: #2c3338;
}
</style>
<?php
$host = "h1use0ulyws4lqr1.cbetxkdyhwsb.us-east-1.rds.amazonaws.com" ;
$user = "if3ryonp8v2yhks5" ;
$pass = "e3wg4fsqc8vljrh0" ;
$DB = "mdbdl32mu2ovolnh" ;
$con= mysqli_connect($host,$user,$pass,$DB);
if(!$con)
{
     die("<marquee direction='left' style='color: #3498DB;'>เชื่อมต่อฐานข้อมูลผิดพลาด ❌</marquee>");
}
else
{
     echo "<marquee direction='left' style='color: #3498DB;'>เชื่อมต่อฐานข้อมูลสำเร็จ ✅</marquee>";
}
mysqli_query($con, "SET NAMES 'utf8' ");
error_reporting( error_reporting() & ~E_NOTICE );
date_default_timezone_set('Asia/Bangkok');
?>