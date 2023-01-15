<?php
include('condb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
//สร้างตัวแปรเก็บค่าที่รับมาจากฟอร์ม
$username = $_POST["username"];
$password = $_POST["password"];
$name = $_POST["name"];
$level = $_POST["level"];


// เช็คว่ามีข้อมูลนี้อยู่หรือไม่
$check = "select * from login  where username = '$username' ";
$result1 = mysqli_query($con,$check) or die(mysqli_error($check));
  $num=mysqli_num_rows($result1); 
  if($num > 0)   		
  {
//ถ้ามี username นี้อยู่ในระบบแล้วให้แจ้งเตือน
	   echo "<script>";
	   echo "alert(' มีผู้ใช้ username นี้แล้ว กรุณาสมัครใหม่อีกครั้ง !');";
	   echo "window.location='ADD-adminform.php';";
		 echo "</script>";

  }else{
//เพิ่มเข้าไปในฐานข้อมูล
$sql = "INSERT INTO login( username, password, name,level)
			 VALUES('$username', '$password', '$name', '$level')";

$result = mysqli_query($con, $sql) or die("Error in query: $sql " . mysqli_error($sql));
  }
//ปิดการเชื่อมต่อ database
mysqli_close($con);
//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม

if ($result) {
	echo "<script type='text/javascript'>";
	echo "alert('สำเร็จ');";
	echo "window.location = './admin.php'; ";
	echo "</script>";
} else {
	echo "<script type='text/javascript'>";
	echo "alert('ผิดพลาด ');";
	echo "</script>";
}
?>