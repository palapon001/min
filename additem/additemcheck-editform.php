<?php
session_start();

include '../condb.php';
date_default_timezone_set('Asia/Bangkok');
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
            <h3 class="card-title">เพิ่มข้อมูลการตรวจสอบชิ้นงาน : <?php echo $ItemName; ?> </h3>
            <p class="card-text">
            <form method="post" action="additemcheck-add.php">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">itemname: </span>
                    <input class="form-control" type="text" name="ItemName" value="<?php echo $ItemName; ?>" disabled />
                    <input class="form-control" type="hidden" name="ItemName" value="<?php echo $ItemName; ?>" />
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Color:</span>
                    <input class="form-control" type="text" name="itemColor" value="<?php echo $itemColor; ?>" disabled />
                    <input class="form-control" type="hidden" name="itemColor" value="<?php echo $itemColor; ?>" />
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Revision:</span>
                    <input class="form-control" type="text" name="itemRevision" value="<?php echo $itemRevision; ?>" disabled />
                    <input class="form-control" type="hidden" name="itemRevision" value="<?php echo $itemRevision; ?>" />
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">MPN: </span>
                    <input class="form-control" type="text" name="itemMPN" value="<?php echo $itemMPN; ?>" disabled />
                    <input class="form-control" type="hidden" name="itemMPN" value="<?php echo $itemMPN; ?>" />
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">รูปภาพ</span>
                    <img src="<?php echo $imageFileName; ?>" width="100" height="100">
                    <input class="form-control" type="text" name="imageFileName" value="" disabled />
                    <input class="form-control" type="hidden" name="imageFileName" value="<?php echo $imageFileName; ?>" />
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text btn btn-danger" id="basic-addon1">Total Quality</span>
                    <input class="form-control" type="number" name="Total" value="" />
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text btn btn-danger" id="basic-addon1">Date No </span>
                    <input class="form-control" type="text" name="Date" value="<?php echo date("Y-m-d H:i:s"); ?>" disabled />
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text btn btn-danger" id="basic-addon1">DateCode: </span>
                    <input class="form-control" type="text" name="sDateCode" value="" />
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text btn btn-danger" id="basic-addon1">Invoice: </span>
                    <input class="form-control" type="text" name="sInvoice" value="" />
                </div>
                
                <div class="input-group mb-3">
                    <span class="input-group-text btn btn-danger" id="basic-addon1">Cosmetic/Appearance</span>
                    <input class="form-control" type="text" name="scosA" value="<?php echo $cosA; ?>" />
                </div>
            
                <p>
                <div class="mb-3 ">
                    <label for="exampleFormControlTextarea1" class="form-label">หมายเหตุ</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="Note" rows="3"></textarea>
                </div>
                </p>
               

                <button type="button" class='mt-3 btn btn-danger' onclick="history.back() "> ยกเลิก </button>
                <input type="submit" class='mt-3 btn btn-primary' value="เพิ่มข้อมูล">
            </form>
            </p>
        </div>
    </div>
</body>

</html>