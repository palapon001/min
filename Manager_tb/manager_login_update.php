<meta charset="UTF-8">
<?php
include('../condb.php');
//สร้างตัวแปรสำหรับรับค่าที่นำมาแก้ไขจากฟอร์ม
$login_id = $_POST["login_id"];
$username = $_POST["username"];
$password = $_POST["password"];
$statusLogin = $_POST["statusLogin"];

//ทำการปรับปรุงข้อมูลที่จะแก้ไขลงใน database 

$sql = "UPDATE `login` 
SET 
`login_id`= '$login_id',
`username`='$username'
,`password`='$password',
`statusLogin`='$statusLogin'

WHERE login_id = '$login_id' ";

$result = mysqli_query($con, $sql) or die("Error in query: $sql ");

mysqli_close($con); //ปิดการเชื่อมต่อ database 

//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม

if ($result) {
	echo "<script type='text/javascript'>";
	echo "alert('สำเร็จ');";
	echo "window.location = '../Manager_tb_Login.php'; ";
	echo "</script>";
} else {
	echo "<script type='text/javascript'>";
	echo "alert('ไม่สำเเร็จ!!!');";
	echo "window.location = '../Manager_tb_Login.php'; ";
	echo "</script>";
}
?>