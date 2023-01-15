  <div class="container mt-3">
    <div class="row align-items-start">
      <div class="col">
        <h3 class="text-dark ">รายชื่อผู้ใช้</h3>
      </div>

      <div class="col">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary position-absolute top-1 end-0 me-5" data-bs-toggle="modal" data-bs-target="#exampleModal">
          เพิ่มผู้ใช้
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">เพิ่มผู้ใช้</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form method="post" action="ADD-admin-save.php" enctype="multipart/form-data">

                  <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Username</span>
                    <input type="text" name="username" class="form-control" placeholder="Username">
                  </div>

                  <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Password</span>
                    <input type="text" name="password" class="form-control" placeholder="Password">
                  </div>

                  <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Name</span>
                    <input type="text" name="name" class="form-control" placeholder="name">
                  </div>


                  <div class="input-group mb-3">
                    <span class="input-group-text">สถานะ</span>
                    <select name="level" id="level" required>
                      <option disabled="" value="NONE" selected="">----โปรดเลือก-----</option>
                      <option value="admin">ผู้ดูแลระบบ</option>
                      <option value="user">ผู้ใช้ทั่วไป</option>
                    </select>
                  </div>

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <input type="submit" name="submit" id="submit" value="เพิ่มข้อมูล" class="btn btn-primary" />
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="table-responsive mt-3">
        <table class="table table-dark table-bordered" align="center">
          <tr>
            <td rowspan="2" align="center">username</td>
            <td rowspan="2" align="center">password</td>
            <td rowspan="2" align="center">name</td>
            <td rowspan="2" align="center">level</td>

          </tr>
          <tr>
            <td align="center">แก้ไข</td>
            <td align="center">ลบ</td>
          </tr>
          <?php
          //คำสั่งให้เลือกข้อมูลจาก TABLE ชื่อ tbl_member โดยเรียงจาก member_id และให้เรียงลำดับจากมากไปน้อยคือ DESC และ เปิดดู error เวลามีปัญหา
          $query = "SELECT * FROM login ORDER BY ID DESC" or die("Error:" . mysqli_error($con));
          //ประกาศตัวแปร sqli
          $result = mysqli_query($con, $query);


          //สร้างตัวแปร $row มารับค่าจากการ fetch array
          while ($row = mysqli_fetch_array($result)) {
          ?>
            <tr>

              <!--เรียกตัวแปรพร้อมฟิวที่จะให้แสดงคือid-->
              <td align="center"><?php echo $row['username']; ?></td>
              <td align="center"><?php echo $row['password']; ?></td>
              <td align="center"><?php echo $row['name']; ?></td>
              <td align="center"><?php echo $row['level']; ?></td>
              <!--เรียกตัวแปรพร้อมฟิวที่จะให้แสดงคือname-->

              <td align="center"><a href="adminupdateform.php?ID=<?php echo $row['ID']; ?>">แก้ไข</a></td>
              <!--กรณีส่งค่าไปแก้ไข-->
              <td align="center"><a href='delete_db admin.php?ID=<?php echo $row['ID']; ?>' onclick="return confirm('Do you want to delete this record? !!!')">ลบ</a></td>
              <!--กรณีส่งค่าไปลบ-->

            </tr>
          <?php
          }


          ?>
        </table>
      </div>

    </div>
  </div>