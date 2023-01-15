<style>
html {
  background-color: #2c3338;
}
</style>
<?php
$con= mysqli_connect("localhost","sql_634244113_it","pA5LHYtSn3r73dyt","sql_634244113_it");
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