<?php
session_start();
include 'condb.php';
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
    <h3 class="card-header">จัดการข้อมูล Login  </h3>
        <div class="card-body">
            <div class="table-responsive">
                <table class='table'>
                    <tr>
                        <td>NO</td>
                        <td>username</td>
                        <td>password</td>
                        <td>สถานะ</td>
                        <td>แก้ไข</td>
                        <td>ลบ</td>
                    </tr>
                    <?php
                    $sql1 = " SELECT * FROM login ORDER BY login_id ASC ";
                    $q = mysqli_query($con, $sql1);
                    $no = 1;
                    while ($f = mysqli_fetch_assoc($q)) {
                    ?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $f['username']; ?></td>
                            <td><?php echo $f['password']; ?></td>
                            <td><?php echo $f['statusLogin']; ?></td>
                            <td><a href='./Manager_tb/manager_login_update_form.php?login_id=<?php echo $f['login_id']; ?>' class="btn btn-warning">แก้ไข</a></td>
                            <td><a href='./Manager_tb/manager_login_del.php?login_id=<?php echo $f['login_id']; ?>' class="btn btn-danger" onclick="return confirm('ต้องการจะลบหรือไม่')">ลบ</a></td>

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