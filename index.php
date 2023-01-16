<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
    include 'condb.php';
    include 'HeadDetail.php';
    include 'bootstrap.php';
    ?>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

</head>

<body>
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="card" style="width: 25rem;">
            <div class="card-body">
                <center>
                    <form name="form1" method="post" action="check_login.php">
                        <p>
                        <h1>SCQA</h1>
                        <h5>(Supplier Chain Quality Assurance)</h5>
                        </p>
                        <div class="input-group mb-3">
                            <span class="input-group-text material-symbols-outlined">
                                account_circle
                            </span>
                            <input name="username" type="text" id="username" placeholder="ชื่อผู้ใช้" class="form-control">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text material-symbols-outlined">
                                lock
                            </span>
                            <input name="password" type="password" id="password" placeholder="รหัสผ่าน" class="form-control">
                        </div>
                        <p><input type="submit" name="Submit" value="เข้าสู่ระบบ" class="btn btn-primary"></p>
                    </form>
                </center>
            </div>
        </div>
    </div>
</body>

</html>