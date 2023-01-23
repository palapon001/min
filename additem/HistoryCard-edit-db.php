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
$Total = $_POST["Total"]; 
$Date = $_POST["Date"];
$Note = $_POST["Note"];
$DateCode = $_POST["sDateCode"];
$Invoice = $_POST["sInvoice"];
$cosA = $_POST["scosA"];
//ทำการปรับปรุงข้อมูลที่จะแก้ไขลงใน database 

$sql = "UPDATE `saveReport` 
SET 
`sItemID`= '$ItemID',
`sItemName`='$ItemName'
,`simageFileName`='$imageFileName',
`sitemColor`='$itemColor',
`sitemRevision`='$itemRevision',
`sitemMPN`='$itemMPN',
`sTotal`='$Total' ,
`sDate`='$Date' ,
`sDateCode`='$DateCode' ,
`sInvoice`='$Invoice' ,
`sNote`='$Note',
`scosA`='$cosA'

WHERE sItemID = '$ItemID' ";

$result = mysqli_query($con, $sql) or die("Error in query: $sql ");

mysqli_close($con); //ปิดการเชื่อมต่อ database 

//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม

if ($result) {
	echo "<script type='text/javascript'>";
	echo "alert('สำเร็จ');";
	echo "window.location = '../HistoryCard.php?ItemName=$ItemName'; ";
	echo "</script>";
} else {
	echo "<script type='text/javascript'>";
	echo "alert('ไม่สำเเร็จ!!!');";
	echo "window.location = '.index.php'; ";
	echo "</script>";
}
?>