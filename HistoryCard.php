<?php
session_start();

include 'condb.php';

$ItemName = mysqli_real_escape_string($con, $_GET['ItemName']);
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
    <div class="card mt-3" >
    <h3 class="card-header">HistoryCard : <?php echo $ItemName ?> </h3>
        <div class="card-body">
        <h5>invoice</h5>
            <div class="table-responsive">
                <table class='table'>
                    <tr>
                        <td>NO</td>
                        <td>Total Quality</td>
                        <td>Date No</td>
                        <td>Date Code</td>
                        <td>Invoice</td>
                        <td>หมายเหตุ</td>
                        <td>แก้ไข</td>
                        <td>ลบ</td>
                    </tr>
                    <?php

                    $sql = " SELECT * FROM saveReport where sItemName ='$ItemName'";
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
                            <td><a href='./additem/HistoryCard-del.php?sItemID=<?php echo $f['sItemID']; ?>' class="btn btn-danger" onclick="return confirm('ต้องการจะลบหรือไม่')">ลบ</a></td>

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