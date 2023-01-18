<?php
include('../condb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
//สร้างตัวแปรเก็บค่าที่รับมาจากฟอร์ม
$ItemName = $_POST["ItemName"];
$itemColor = $_POST["itemColor"];
$itemRevision = $_POST["itemRevision"];
$imageFileName = $_POST["imageFileName"];
$itemMPN = $_POST["itemMPN"];
$Total = $_POST["Total"];
$Date = $_POST["Date"];
$Note = $_POST["Note"];

// เช็คว่ามีข้อมูลนี้อยู่หรือไม่
// $check = "select * from item  where ItemName = '$ItemName' ";
// $result1 = mysqli_query($con,$check) or die("$check");
//   $num=mysqli_num_rows($result1); 
//   if($num > 0)   		
//   {
//ถ้ามี username นี้อยู่ในระบบแล้วให้แจ้งเตือน
// 	   echo "<script>";
// 	   echo "alert(' มีแล้ว  !');";
// 	   echo "window.location='additem.php';";
// 		 echo "</script>";

//   }else{
	if($imageFileName == ""){
		$imageFileName = "https://s10x.herokuapp.com/Logo.png" ;
	}
//เพิ่มเข้าไปในฐานข้อมูล
$sql = "INSERT INTO saveReport(sItemName,sitemColor,sitemRevision,simageFileName,sitemMPN,sTotal,sDate,sNote)
			 VALUES('$ItemName','$itemColor','$itemRevision','$imageFileName','$itemMPN','$Total','$Date','$Note')";

$result = mysqli_query($con, $sql) or die("Error in query: $sql " );
//ปิดการเชื่อมต่อ database
mysqli_close($con);
//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม

if ($result) {
	echo "<script type='text/javascript'>";
	echo "alert('สำเร็จ');";
	echo "window.location = '../HistoryCard.php?ItemName=$ItemName'; ";
	echo "</script>";
} else {
	echo "<script type='text/javascript'>";
	echo "alert('ผิดพลาด ');";
	echo "</script>";
}
?>