<?php
session_start();
$ID = $_SESSION['ID'];
$name = $_SESSION['name'];
$level = $_SESSION['level'];

include './Bootstrap.html';
//ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
//ตรวจสอบถ้าว่างให้เด้งไปหน้าหลัก


//รับค่าไอดีที่จะแก้ไข
$PID = mysqli_real_escape_string($con, $_GET['PID']);

//2. query ข้อมูลจากตาราง: 
$sql = "SELECT * FROM product WHERE PID='$PID' ";
$result = mysqli_query($con, $sql) or die("Error in query: $sql " . mysqli_error($sql));
$row = mysqli_fetch_array($result);
extract($row);
?>

<!DOCTYPE html>
<html>

<body>
  <div class="container mt-3">
    <form method="post" action="pd-up-db.php" enctype="multipart/form-data">
      <h3 class="text-light">แก้ไขข้อมูล <?php echo $pname; ?> </h3>
      <div class="table-responsive">
        <table class="table table-dark table-hover" align="center">
          <tr>
            <td> PID :</td>
            <td>
              <input type="text" name="PID" value="<?php echo $PID; ?>" disabled='disabled' />
              <input type="hidden" name="PID" value="<?php echo $PID; ?>" />

            </td>
          </tr>

          <tr>
            <td> ชื่อสินค้า</td>
            <td>
              <input name="pname" value="<?php echo $pname; ?>" type="text" id="pname">
            </td>
          </tr>
          <tr>
            <td> ราคา / บาท</td>
            <td><input name="pprice" value="<?php echo $pprice; ?>" . type="number" id="pprice">
            </td>
          </tr>


          <tr>
            <td> แนบรูปภาพ</td>

            <td>
              <img src="http://202.29.65.142/634244113/MIN/<?php echo $pimg; ?>" class="img-thumbnail">
              <input name="pimg" type="file" id="pimg">
            </td>
          </tr>
          <tr>
            <td> รายละเอียด</td>
            <td>
              <textarea name="pdetail"><?php echo $pdetail; ?></textarea>
            </td>
          </tr>

          <tr>
            <td> สถานะ</td>
            <td>
              <select name="pstatus" id="cars">
                <option value="<?php echo $pstatus; ?>" selected>เลือก</option>
                <option value="check">ตรวจสอบแล้ว</option>
                <option value="ncheck">ยังไม่ผ่านการตรวจสอบ</option>
              </select>
            </td>
          </tr>

        </table>

        <input type="submit" name="submit" id="submit" value="ยืนยัน" class="btn btn-primary rounded-pill" />
    </form>



  </div>
  </div>

</body>

</html>