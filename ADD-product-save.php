<?php
include('condb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
//สร้างตัวแปรเก็บค่าที่รับมาจากฟอร์ม

$pname = $_POST["pname"];
$pprice = $_POST["pprice"];
$pdetail = $_POST["pdetail"];
$pstatus = $_POST["pstatus"];

 $path="upimg/";
 $des_file = $path.basename("PIMG-".rand(0,microtime(true))."-".$_FILES["pimg"]["name"]);
$file_ext=strtolower(end(explode('.',$_FILES["pimg"]["name"])));
      $extension = array("jpeg","jpg","png");
      if (in_array($file_ext,$extension)){
        if (move_uploaded_file($_FILES["pimg"]["tmp_name"],$des_file)) {
          echo "Complete";
        }
        echo  $des_file;
      }
// เช็คว่ามีข้อมูลนี้อยู่หรือไม่
$check = "select * from product  where pname = '$pname' ";
$result1 = mysqli_query($con,$check) or die(mysqli_error($check));
  $num=mysqli_num_rows($result1); 
  if($num > 0)   		
  {
//ถ้ามี username นี้อยู่ในระบบแล้วให้แจ้งเตือน
	   echo "<script>";
	   echo "alert(' มีผู้ใช้ สินค้าชิ้น นี้แล้ว กรุณากรอกใหม่อีกครั้ง !');";
	   echo "window.location='ADD-productform.php';";
		 echo "</script>";

  }else{
//เพิ่มเข้าไปในฐานข้อมูล
$sql = "INSERT INTO product( pname, pprice,pdetail,pimg,pstatus)
			 VALUES('$pname', '$pprice',  '$pdetail','$des_file','$pstatus')";
			

$result = mysqli_query($con, $sql) or die("Error in query: $sql " . mysqli_error($sql));
  }
//ปิดการเชื่อมต่อ database
mysqli_close($con);
//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม

if ($result) {
	echo "<script type='text/javascript'>";
	echo "alert('สำเร็จ');";
	echo "history.back();";
	echo "</script>";
} else {
	echo "<script type='text/javascript'>";
	echo "alert('ผิดพลาด ');";
	echo "</script>";
}
?>