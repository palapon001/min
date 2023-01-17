<?php session_start();
if (!$_SESSION["id"]) {  //check session
    Header("Location: ../index.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form 
}
?>

<!doctype html>
<html>

<head>
    <?php
    include 'HeadDetail.php';
    ?>
</head>

<body>
    <?php

    include 'bootstrap.php';
    include 'Nav.php';
    ?>

    <div class="card">
        <div class="card-body">

            <center>
                <h2>ALL ITEM</h2>
            </center>


            <?php
            include './condb.php';
            ?>

            <div class="container text-center">
                <div class="row">
                    <?php
                    $sql1 = " SELECT * FROM item ORDER BY itemid ASC ";
                    $q = mysqli_query($con, $sql1);
                    $no = 1;
                    while ($f = mysqli_fetch_assoc($q)) {
                    ?>

                        <div class="col-md-auto">
                            <div class="card mt-3" style="width: 18rem;">
                                <img src="<?php echo $f['imageFileName']; ?>" onerror="this.onerror=null; this.src='Logo.png'" class="card-img-top" width="200" height="200">
                                <div class="card-body">
                                    <div class="alert alert-warning" role="alert">
                                        สถานะ : รอผลการตรวจสอบ
                                    </div>
                                    <h5 class="card-title"><?php echo $f['ItemName']; ?></h5>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $no ?>">
                                        ข้อมูล
                                    </button>
                                    <a href='additem/additem-del.php?ItemID=<?php echo $f['ItemID']; ?> ' class="btn btn-danger">ลบข้อมูล</a>
                                    <a href='HistoryCard.php?ItemName=<?php echo $f['ItemName']; ?>' class="mt-3 btn btn-primary form-control">History Card</a>
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal<?php echo $no ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">รายละเอียด <?php echo $f['ItemName']; ?></h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <img src="<?php echo $f['imageFileName']; ?>" onerror="this.onerror=null; this.src='Logo.png'" class="card-img-top" width="200" height="200">
                                                    <p>

                                                    <h5 class="card-title">GB000284000</h5>
                                                    <h5 class="card-title">Color : Black</h5>
                                                    <h5 class="card-title">Revision: J</h5>
                                                    <h5 class="card-title">MPN : A9T80:-60008</h5>

                                                    </p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ปิด</button>
                                                    <a href='./additem/additem-editform.php?ItemID=<?php echo $f['ItemID']; ?> ' class="btn btn-warning">แก้ไข</a>
                                                    <a href='./additem/additemcheck-editform.php?ItemID=<?php echo $f['ItemID']; ?> ' class="btn btn-primary">เพิ่มข้อมูลการตรวจสอบชิ้นงาน</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    <?php
                        $no++;
                    }

                    mysqli_close($con);
                    ?>

                </div>
            </div>
            </p>
        </div>
    </div>



</body>

</html>