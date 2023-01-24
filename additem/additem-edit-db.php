<meta charset="UTF-8">
<?php
include('../condb.php');
//สร้างตัวแปรสำหรับรับค่าที่นำมาแก้ไขจากฟอร์ม
$ItemID = $_POST["ItemID"];
$ItemName = $_POST["ItemName"];
$itemColor = $_POST["itemColor"];
$itemRevision = $_POST["itemRevision"];
$imageFileName = $_POST["imageFileName"];
$itemMPN = $_POST["itemMPN"];
$cosA = $_POST["cosA"];
$status = $_POST["status"];
// $Total = $_POST["Total"]; 
// $Date = $_POST["Date"];
// $Note = $_POST["Note"];
//ทำการปรับปรุงข้อมูลที่จะแก้ไขลงใน database 

$sql = "UPDATE `item` 
SET 
`ItemID`= '$ItemID',
`ItemName`='$ItemName'
,`imageFileName`='$imageFileName',
`itemColor`='$itemColor',
`itemRevision`='$itemRevision',
`cosA`='$cosA',
`status`='$status',
`itemMPN`='$itemMPN'

WHERE ItemID = '$ItemID' ";

$result = mysqli_query($con, $sql) or die("Error in query: $sql ");

mysqli_close($con); //ปิดการเชื่อมต่อ database 

//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม

if ($result) {
	echo "<script type='text/javascript'>";
	echo "alert('สำเร็จ');";
	echo "window.location = '../page.php'; ";
	echo "</script>";
} else {
	echo "<script type='text/javascript'>";
	echo "alert('ไม่สำเเร็จ!!!');";
	echo "window.location = '../page.php'; ";
	echo "</script>";
}
?>