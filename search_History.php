<?php
session_start();
include('condb.php');
if (isset($_POST["search"])) {
    $search = $_POST["search"];
} else {
    $search = "";
}
$trimItemName = trim($search);
$ireplaceTrimItemName = str_ireplace(" ", "-", $trimItemName);

if (!$_SESSION["id"]) {  //check session
    Header("Location: ../index.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form 
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include 'condb.php';
    include 'HeadDetail.php';
    include 'bootstrap.php';
    ?>
</head>

<body>
    <?php include "Nav.php"; ?>
    <div class="card mt-3">
        <h3 class="card-header">Invoice : <?php echo $search ?> </h3>
        <div class="card-body">
            <div class="table-responsive">
                <table class='table'>
                    <tr>
                        <td>No.</td>
                        <td>Total Quality</td>
                        <td>Date No.</td>
                        <td>Date Code</td>
                        <td>Invoice</td>
                        <td>หมายเหตุ</td>
                        <td>แก้ไข</td>
                        <?php if ($_SESSION['status'] == 'ADMIN') { ?>
                            <td>ลบ</td>
                        <?php } ?>
                    </tr>
                    <?php
                    if ($search == "") {
                        $sql = " SELECT * FROM saveReport where sItemName ='$ItemName' ";
                    } else {
                        $sql = " SELECT * FROM saveReport Where sInvoice LIKE '$trimItemName%' ";
                    }
                    $q = mysqli_query($con, $sql);
                    $no = 1;
                    while ($f = mysqli_fetch_assoc($q)) {
                    ?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $f['sTotal']; ?></td>
                            <td><?php echo $f['sDate']; ?></td>
                            <td><?php echo $f['sDateCode']; ?></td>
                            <td><?php echo $f['sInvoice']; ?></td>
                            <td><?php echo $f['sNote']; ?></td>
                            <td><a href='./additem/HistoryCard-editform.php?sItemID=<?php echo $f['sItemID']; ?>' class="btn btn-warning">แก้ไข</a></td>
                            <?php if ($_SESSION['status'] == 'ADMIN') { ?>
                                <td><a href='./additem/HistoryCard-del.php?sItemID=<?php echo $f['sItemID']; ?>' class="btn btn-danger" onclick="return confirm('ต้องการจะลบหรือไม่')">ลบ</a></td>
                            <?php } ?>

                        </tr>

                    <?php
                        $no++;
                    }
                    echo "</table>";
                    if ($no == 1) {
                    ?>
                        <center>
                            <h1>ไม่พบข้อมูล</h1>
                        </center>
                    <?php
                    }

                    mysqli_close($con);
                    ?>
            </div>
        </div>
    </div>
</body>

</html>