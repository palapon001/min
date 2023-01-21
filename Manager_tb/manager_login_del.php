<?php
include('../condb.php'); 
$login_id = $_REQUEST["login_id"];

$sql = "DELETE FROM login WHERE login_id='$login_id' ";
$result = mysqli_query($con, $sql) or die("Error in query: $sql ");

//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม

if ($result) {
  echo "<script type='text/javascript'>";
  echo "alert('ลบ เสร็จสิ้น');";
  echo "window.location = '../Manager_tb_Login.php'; ";
  echo "</script>";
} else {
  echo "<script type='text/javascript'>";
  echo "alert('Error back to delete again');";
  echo "</script>";
}
?>
