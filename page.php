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
                <?php
                include 'commonSearch.php';
                ?>
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
                        include 'commonItemCard.php' ;
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