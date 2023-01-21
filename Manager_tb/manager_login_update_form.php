<?php
session_start();

include '../condb.php';

$login_id = mysqli_real_escape_string($con, $_GET['login_id']);

//2. query ข้อมูลจากตาราง: 
$sql = "SELECT * FROM login WHERE login_id='$login_id' ";
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
            <h3 class="card-title">แก้ไขข้อมูล <?php echo $username; ?> </h3>
            <p class="card-text">
            <form method="post" action="manager_login_update.php">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">username: </span>
                    <input class="form-control" type="text" name="username" value="<?php echo $username; ?>" />
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">password:</span>
                    <input class="form-control" type="text" name="password" value="<?php echo $password; ?>" />
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">สถานะ</span>
                    <select name="statusLogin" class="form-control"  >
                        <option value="<?php echo $statusLogin; ?>" selected hidden><?php echo $statusLogin; ?></option>
                        <option value="ADMIN">ADMIN</option>
                        <option value="USER">USER</option>
                    </select>
                </div>

                <input type="hidden" name="login_id" value="<?php echo $login_id; ?>" />
                <button type="button" class='mt-3 btn btn-danger' onclick="history.back() "> ยกเลิก </button>
                <input type="submit" class='mt-3 btn btn-warning' value="แก้ไข">
            </form>
            </p>
        </div>
    </div>
</body>

</html>