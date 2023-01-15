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
                    <input class="form-control" type="text" name="ItemName" value="<?php echo $ItemName; ?>" disabled />
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Color:</span>
                    <input class="form-control" type="text" name="Amount" value="<?php echo $itemColor; ?>" disabled />
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Revision:</span>
                    <input class="form-control" type="text" name="Price" value="<?php echo $itemRevision; ?>" disabled />
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">MPN: </span>
                    <input class="form-control" type="text" name="Moisture" value="<?php echo $itemMPN; ?>" disabled />
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">รูปภาพ</span>
                    <img src="<?php echo $imageFileName; ?>" width="100" height="100">
                    <input class="form-control" type="text" name="imageFileName" value="" disabled />
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Total Quality</span>
                    <input class="form-control" type="number" name="imageFileName" value="" />
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Date No </span>
                    <input class="form-control" type="Date" name="imageFileName" value="" />
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">หมายเหตุ</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
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