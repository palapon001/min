<?php
session_start();

include '../condb.php';

$ItemID = mysqli_real_escape_string($con, $_GET['sItemID']);

//2. query ข้อมูลจากตาราง: 
$sql = "SELECT * FROM saveReport WHERE sItemID='$ItemID' ";
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
            <h3 class="card-title">แก้ไข : <?php echo $sItemName; ?>  </h3>
            <p class="card-text">
            <form method="post" action="HistoryCard-edit-db.php">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">itemname: </span>
                    <input class="form-control" type="text" name="ItemID" value="<?php echo $sItemID; ?>"  />
                    <input class="form-control" type="text" name="ItemName" value="<?php echo $sItemName; ?>"  />
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Color:</span>
                    <input class="form-control" type="text" name="itemColor" value="<?php echo $sitemColor; ?>"  />
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Revision:</span>
                    <input class="form-control" type="text" name="itemRevision" value="<?php echo $sitemRevision; ?>"  />
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">MPN: </span>
                    <input class="form-control" type="text" name="itemMPN" value="<?php echo $sitemMPN; ?>"  />
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">รูปภาพ</span>
                    <img src="<?php echo $imageFileName; ?>" width="100" height="100">
                    <input class="form-control" type="text" name="imageFileName" value="<?php echo $simageFileName; ?>"  />
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text btn btn-danger" id="basic-addon1">Total Quality</span>
                    <input class="form-control" type="number" name="Total" value="<?php echo $sTotal; ?>" />
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text btn btn-danger" id="basic-addon1">Date No </span>
                    <input class="form-control" type="datetime-local" name="Date" value="<?php echo $sDate; ?>" />
                </div>
                <p>
                <div class="mb-3 ">
                    <label for="exampleFormControlTextarea1" class="form-label">หมายเหตุ</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="Note" rows="3"><?php echo $sNote; ?></textarea>
                </div>
                </p>

                <button type="button" class='mt-3 btn btn-danger' onclick="history.back() "> ยกเลิก </button>
                <input type="submit" class='mt-3 btn btn-warning' value="แก้ไขข้อมูล">
            </form>
            </p>
        </div>
    </div>
</body>

</html>