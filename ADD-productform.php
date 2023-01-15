<?php session_start();
$ID = $_SESSION['ID'];
$name = $_SESSION['name'];
$level = $_SESSION['level'];
if ($level != 'admin') {
  Header("Location: ./logout.php");
}
?>
<!DOCTYPE html>
<html>

<body>
  <!--include-->
  <?php
  include "Bootstrap.html";
  ?>
  <!--include-->
  
              <div class="container mt-3">

                  <form  method="post" action="ADD-product-save.php" enctype="multipart/form-data">
                    <h3 class="text-light">เพิ่มข้อมูล product </h3>
<div class="table-responsive">
       <table class="table table-dark table-hover" align="center">
                      <tr>
                        <td> ชื่อสินค้า</td>
                        <td>
                          <input name="pname" type="text" id="pname" required>
                        </td>
                      </tr>
                      <tr>
                        <td> ราคา / บาท</td>
                        <td><input name="pprice" type="number" id="pprice" required>
                        </td>
                      </tr>

                     
   <tr> <td> แนบรูปภาพ</td> <td><input name="pimg" type="file" id="pimg" required></td>  </tr> 
                      <tr>
                        <td> รายละเอียด</td>
                        <td>
                          <textarea name="pdetail"></textarea>
                        </td>
                      </tr>

                    <tr>
                        <td> สถานะ</td>
                        <td>
                          <select name="pstatus" id="cars">
					<option value="ncheck" selected>เลือก</option>
  									<option value="check">ตรวจสอบแล้ว</option>
  									<option value="ncheck">ยังไม่ผ่านการตรวจสอบ</option>
								</select>
                        </td>
                      </tr>

                    </table>

  <input type="submit" name="submit" id="submit" value="เพิ่มข้อมูล" class="btn btn-primary rounded-pill" />
                  </form>


                
              </div>
      </div>

</body>
</html>