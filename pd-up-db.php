<meta charset="UTF-8">
<?php
//1. เชื่อมต่อ database: 
include('condb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี


//สร้างตัวแปรสำหรับรับค่าที่นำมาแก้ไขจากฟอร์ม
$PID = $_POST["PID"];
$pname = $_POST["pname"];
$pprice = $_POST["pprice"];
$pdetail = $_POST["pdetail"];
$pstatus = $_POST["pstatus"];

$path = "upimg/";
$des_file = $path . basename("PIMG-" . rand(0, microtime(true)) . "-" . $_FILES["pimg"]["name"]);
$file_ext = strtolower(end(explode('.', $_FILES["pimg"]["name"])));
$extension = array("jpeg", "jpg", "png");
if (in_array($file_ext, $extension)) {
	if (move_uploaded_file($_FILES["pimg"]["tmp_name"], $des_file)) {
		echo "Complete";
	}
	echo  $des_file;
}

//ทำการปรับปรุงข้อมูลที่จะแก้ไขลงใน database 

$sql = "UPDATE product SET  
				pname='$pname', 
				pprice ='$pprice',
				pimg='$des_file',
				pdetail='$pdetail',
				pstatus='$pstatus'
			WHERE PID='$PID' ";

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