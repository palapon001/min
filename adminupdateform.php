<?php
session_start();
$ID = $_SESSION['ID'];
$name = $_SESSION['name'];
$level = $_SESSION['level'];
include './Bootstrap.html';
 //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
//ตรวจสอบถ้าว่างให้เด้งไปหน้าหลัก

//รับค่าไอดีที่จะแก้ไข
$ID = mysqli_real_escape_string($con, $_GET['ID']);

//2. query ข้อมูลจากตาราง: 
$sql = "SELECT * FROM login WHERE ID='$ID' ";
$result = mysqli_query($con, $sql) or die("Error in query: $sql " . mysqli_error($sql));
$row = mysqli_fetch_array($result);
extract($row);
?>

<!DOCTYPE html>
<html>
<body>
   <div class="container mt-3">

                  <form  method="post" action="adminupdate_db.php">
                    <h3 class="text-light">แก้ไขข้อมูล <?php echo $name; ?> </h3>
       <table class="table table-dark table-hover" align="center">
<tr>
                      <td > ID :</td>
                      <td>
   <input type="text" name="ID" value="<?php echo $ID; ?>" disabled='disabled' />
   <input type="hidden" name="ID" value="<?php echo $ID; ?>" />

                      </td>
                    </tr>
                    <tr>

                      <tr>
                        <td> Username</td>
                        <td>
<input name="username" value="<?php echo $username; ?>" type="text" id="username" size="20">
                        </td>
                      </tr>
                      <tr>
                        <td> Password</td>
                        <td><input name="password" type="text" value="<?php echo $password; ?>" id="password">
                        </td>
                      </tr>

                      <tr>
                        <td>&nbsp;Name</td>
                        <td><input name="name" type="text" id="name" value="<?php echo $name; ?>" ></td>
                      </tr>
                      <tr>
                        <td> &nbsp;Status</td>
                        <td>
                          <select name="level" id="level" required>
<option value="<?php echo $level; ?>" selected=""><?php echo $level; ?></option>
                            <option value="admin">admin</option>
                            <option value="user">user</option>
                          </select>
                        </td>
                      </tr>
                    

                    </table>
<button class="btn btn-danger" type="button" onclick="history.back() "> ยกเลิก </button>
  <input type="submit" name="Register" id="Register" value="แก้ไข" class="btn btn-primary" />
                  </form>


                
              </div>
      

</body>
</html>

             