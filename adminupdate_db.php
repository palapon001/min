<meta charset="UTF-8">
<?php
//1. เชื่อมต่อ database: 
include('condb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี

//ตรวจสอบถ้าว่างให้เด้งไปหน้าหลักและไม่แก้ไขข้อมูล
if ($_POST["ID"] == '') {
	echo "<script type='text/javascript'>";
	echo "alert('ผิดพลาด ติดต่อ Admin !!');";
	echo "window.location = admin.php'; ";
	echo "</script>";
}

//สร้างตัวแปรสำหรับรับค่าที่นำมาแก้ไขจากฟอร์ม
$ID = $_POST["ID"];
$username = $_POST["username"];
$password = $_POST["password"];
$name = $_POST["name"];
$level = $_POST["level"];

//ทำการปรับปรุงข้อมูลที่จะแก้ไขลงใน database 

$sql = "UPDATE login SET  
				username='$username', 
				password ='$password',
				name='$name',
				level='$level'
			WHERE ID='$ID' ";

$result = mysqli_query($con, $sql) or die("Error in query: $sql " . mysqli_error($sql));

mysqli_close($con); //ปิดการเชื่อมต่อ database 

//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม

if ($result) {
	echo "<script type='text/javascript'>";
	echo "alert('สำเร็จ');";
	echo "window.location = './admin.php'; ";
	echo "</script>";
} else {
	echo "<script type='text/javascript'>";
	echo "alert('ไม่สำเเร็จ!!!');";
	echo "window.location = '.admin.php'; ";
	echo "</script>";
}
?>