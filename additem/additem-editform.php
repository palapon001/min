<?php
session_start();

include '../condb.php';

$ItemID = mysqli_real_escape_string($con, $_GET['ItemID']);

//2. query ข้อมูลจากตาราง: 
$sql = "SELECT * FROM item WHERE ItemID='$ItemID' ";
$result = mysqli_query($con, $sql) or die("Error in query: $sql ");
$row = mysqli_fetch_array($result);
extract($row);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include '../HeadDetail.php';
    include '../bootstrap.php';
    ?>
</head>

<body>
    <div class="card mt-3">
        <div class="card-body">
            <h3 class="card-title">แก้ไขข้อมูล <?php echo $ItemName; ?> </h3>
            <p class="card-text">
            <form method="post" action="additem-edit-db.php">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">itemname: </span>
                    <input class="form-control" type="text" name="ItemName" value="<?php echo $ItemName; ?>" />
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Color:</span>
                    <input class="form-control" type="text" name="itemColor" value="<?php echo $itemColor; ?>" />
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Revision:</span>
                    <input class="form-control" type="text" name="itemRevision" value="<?php echo $itemRevision; ?>" />
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">MPN: </span>
                    <input class="form-control" type="text" name="itemMPN" value="<?php echo $itemMPN; ?>" />
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">รูปภาพ</span>
                    <input class="form-control" type="text" name="imageFileName" value="<?php echo $imageFileName; ?>" />
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Cosmetic/Appearance</span>
                    <input class="form-control" type="text" name="cosA" value="<?php echo $cosA; ?>" />
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">สถานะ</span>
                    <select name="status" class="form-control"  >
                        <option value="<?php echo $status; ?>" selected disabled hidden><?php echo $status; ?></option>
                        <option value="ตรวจสอบเรียบร้อย">ตรวจสอบเรียบร้อย</option>
                        <option value="กำลังตรวจสอบ">กำลังตรวจสอบ</option>
                    </select>
                </div>

                <input type="hidden" name="ItemID" value="<?php echo $ItemID; ?>" />
                <button type="button" class='mt-3 btn btn-danger' onclick="history.back() "> ยกเลิก </button>
                <input type="submit" class='mt-3 btn btn-warning' value="แก้ไข">
            </form>
            </p>
        </div>
    </div>
</body>

</html>