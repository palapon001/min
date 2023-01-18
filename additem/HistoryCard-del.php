<?php
include('../condb.php'); 
$sItemID = $_REQUEST["sItemID"];

$sql = "DELETE FROM saveReport WHERE sItemID='$sItemID' ";
$result = mysqli_query($con, $sql) or die("Error in query: $sql ");

//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม

if ($result) {
	echo "<script type='text/javascript'>";
	echo "alert('สำเร็จ');";
	echo "window.location = '../page.php' ; ";
	echo "</script>";
} else {
	echo "<script type='text/javascript'>";
	echo "alert('ไม่สำเร็จ!!!');";
	echo "window.location = '.index.php'; ";
	echo "</script>";
}
