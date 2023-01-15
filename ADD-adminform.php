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

                  <form  method="post" action="ADD-admin-save.php">
                    <h3 class="text-light">เพิ่มข้อมูล Admin </h3>
<div class="table-responsive">
       <table class="table table-dark table-hover" align="center">
                      <tr>
                        <td> Username</td>
                        <td>
                          <input name="username" type="text" id="username" required>
                        </td>
                      </tr>
                      <tr>
                        <td> Password</td>
                        <td><input name="password" type="password" id="password" required>
                        </td>
                      </tr>

                      <tr>
                        <td>&nbsp;Name</td>
                        <td><input name="name" type="text" id="name" required></td>
                      </tr>
                      <tr>
                        <td> &nbsp;Status</td>
                        <td>
                          <select name="level" id="level" required>
           <option disabled="" value="NONE" selected="">----โปรดเลือก-----</option>
                            <option value="admin">ผู้ดูแลระบบ</option>
                            <option value="user">ผู้ใช้ทั่วไป</option>
                          </select>
                        </td>
                      </tr>
                    

                    </table>

  <input type="submit" name="Register" id="Register" value="เพิ่มข้อมูล" class="btn btn-primary rounded-pill" />
                  </form>


                
              </div>
</div>

      

</body>
</html>