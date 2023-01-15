<div class="container mt-3">
  <div class="row align-items-start">
    <div class="col">
      <h3 class="text-dark ">รายการสินค้า</h3>
    </div>

    <div class="col">
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary position-absolute top-1 end-0 me-5" data-bs-toggle="modal" data-bs-target="#exampleModal">
        เพิ่มสินค้า
      </button>

      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">เพิ่มสินค้า</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form method="post" action="ADD-product-save.php" enctype="multipart/form-data">

                <div class="input-group mb-3">
                  <span class="input-group-text" id="basic-addon1">ชื่อสินค้า</span>
                  <input type="text" name="pname" class="form-control" placeholder="ชื่อสินค้า">
                </div>
                <div class="input-group mb-3">
                  <span class="input-group-text">ราคา</span>
                  <input name="pprice" type="number" id="pprice" class="form-control">
                  <span class="input-group-text">บาท</span>
                </div>
                <div class="input-group mb-3">
                  <input name="pimg" type="file" id="pimg" class="form-control">
                </div>
                <div class="input-group mb-3">
                  <span class="input-group-text">รายละเอียด</span>
                  <textarea class="form-control" name="pdetail"></textarea>
                </div>
                <div class="input-group mb-3">
                  <span class="input-group-text">สถานะ</span>
                  <select class="form-select" name="pstatus" id="cars">
                    <option value="ncheck" selected>เลือก</option>
                    <option value="check">ตรวจสอบแล้ว</option>
                    <option value="ncheck">ยังไม่ผ่านการตรวจสอบ</option>
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


  </div>


  <div class="row">
    <?php
    //คำสั่งให้เลือกข้อมูลจาก TABLE ชื่อ tbl_member โดยเรียงจาก member_id และให้เรียงลำดับจากมากไปน้อยคือ DESC และ เปิดดู error เวลามีปัญหา
    $query = "SELECT * FROM product ORDER BY PID DESC" or die("Error:" . mysqli_error($con));
    //ประกาศตัวแปร sqli
    $result = mysqli_query($con, $query);


    //สร้างตัวแปร $row มารับค่าจากการ fetch array
    while ($row = mysqli_fetch_array($result)) {
    ?>

      <div class="col-sm-6">
        <div class="card mt-3">
          <img src="http://202.29.65.142/634244113/MIN/<?php echo $row['pimg']; ?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">ชื่อสินค้า : <?php echo $row['pname']; ?></h5>
            <h5 class="card-title">ราคา : <?php echo $row['pprice']; ?> บาท</h5>
            <p class="card-text">รายละเอียด : <?php echo $row['pdetail']; ?></p>
            <a href="pd-upform.php?PID=<?php echo $row['PID']; ?>" class="btn btn-warning">แก้ไข</a>
            <a href="del-db-product.php?PID=<?php echo $row['PID']; ?>" class="btn btn-danger" onclick="return confirm('Do you want to delete this record? !!!')">ลบ</a>

            <? if ($row['pstatus'] == "check") { ?>
              <div class="alert alert-success mt-3" role="alert">
                สถานะ : ตรวจสอบแล้ว ✅
              </div>
            <? } else { ?>
              <div class="alert alert-warning mt-3" role="alert">
                สถานะ : ยังไม่ผ่านการตรวจสอบ 🚧
              </div><? } ?>


          </div>
        </div>

      </div>


    <?php
    }


    ?>
  </div>
</div>
</div>